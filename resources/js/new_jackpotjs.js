(function () {
    "use strict";
    var scripts = document.getElementsByTagName("script");
    var me = scripts[scripts.length - 1];
    var tickers = [];
    var error = null;
    var toLocaleStringSupported = ("Intl" in window && "NumberFormat" in Intl);
    if (("bind" in Function.prototype) == false) {
        Function.prototype.bind = function (scope) {
            var args = [];
            for (var _i = 1; _i < arguments.length; _i++) {
                args[_i - 1] = arguments[_i];
            }
            var __method = this;
            return (function () {
                __method.apply(scope, args);
            });
        };
    }
    var SameOriginXhr = (function () {
        function SameOriginXhr(url) {
            this.url = url;
            this.errormsg = null;
            this.binding = null;
            this.interval = -1;
        }
        SameOriginXhr.prototype.sendRealRequest = function (tickerIndex) {
            var doc;
            if (this.frame == null) {
                this.frame = document.createElement('iframe');
                this.frame.style.height = "0px";
                this.frame.style.width = "0px";
                this.frame.style.border = "0px";
                this.frame.style.visibility = "hidden";
                this.frame.style.position = "absolute";
                document.body.appendChild(this.frame);
            }
            if (this.frame.contentDocument != null) {
                doc = this.frame.contentDocument;
            }
            else if (this.frame.contentWindow != null) {
                doc = this.frame.contentWindow.document;
            }
            if (doc == null) {
                if (this.binding == null) {
                    this.binding = this.sendRealRequest.bind(this, tickerIndex);
                }
                setTimeout(this.binding, 100);
                return;
            }
            this.tickerIndex = tickerIndex;
            doc.open();
            doc.write('<html>' +
                '<head>' +
                '<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>' +
                '<script type="text/javascript" >var xmlstring = {};</script>' +
                '<script type="text/javascript" src="' + this.url + '"></script>' +
                '</head>' +
                '<body></body>' +
                '</html>');
            doc.close();
            this.interval = setInterval(this.checkDataAvailability.bind(this), 250);
        };
        SameOriginXhr.prototype.checkDataAvailability = function () {
            var r = null;
            if (this.frame.contentWindow != null) {
                if ("jpxml" in this.frame.contentWindow.xmlstring) {
                    r = this.frame.contentWindow.xmlstring;
                }
            }
            else if (this.frame.contentDocument != null) {
                if ("jpxml" in this.frame.xmlstring) {
                    r = this.frame.xmlstring;
                }
            }
            if (r != null) {
                clearInterval(this.interval);
                this.interval = -1;
                tickers[this.tickerIndex].handleResponse(r);
            }
        };
        SameOriginXhr.prototype.isDownloading = function () {
            return this.interval != -1;
        };
        return SameOriginXhr;
    }());
    var Ticker = (function () {
        function Ticker(p) {
            if (("info" in p) == false) {
                return;
            }
            this.tickingPeriod = 120 * 1000;
            this.downloadInterval = 119 * 1000;
            this.updateInterval = 59;
            this.startPercent = 99;
            this.countDownTarget = 0;
            this.countDownValue = '';
            this.countDownTick = -1;
            this.tickStep = 0;
            this.tickerStartSum = 0;
            this.tickerEndSum = 0;
            this.tickerStartTime = 0;
            this.ticking = true;
            this.url = '';
            this.downloadTime = 0;
            this.type = '';
            this.setup = false;
            this.currency = null;
            this.casino = null;
            this.countElement = null;
            this.currency = (p.currency != null ? p.currency.toLowerCase() : 'usd');
            this.info = p.info;
            this.signpos = -1;
            this.binding = this.tick.bind(this);
            this.countdownbinding = this.countdown.bind(this);
            if (p.root_url) {
                this.url = p.root_url;
            }
            else {
                this.url = me.src.replace(/jackpots\/new_jackpotjs.js.*/, '');
            }
            switch (p.info) {
                case 1: {
                    if (p.game == null || (p.local == 1 && p.casino == null)) {
                        return;
                    }
                    this.countElement = 'game';
                    if (p.casino != null) {
                        this.casino = p.casino.toLowerCase();
                    }
                    this.game = p.game.toLowerCase();
                    this.setup = true;
                    break;
                }
                case 2: {
                    if (p.casino == null) {
                        return;
                    }
                    this.countElement = 'casinototal';
                    this.casino = p.casino.toLowerCase();
                    this.setup = true;
                    break;
                }
                case 4: {
                    this.local = (p.local == 1 || p.local == 0 ? p.local : 2);
                    this.setup = true;
                    break;
                }
                case 5: {
                    if (p.group == null) {
                        return;
                    }
                    this.countElement = 'game';
                    this.group = p.group.toLowerCase();
                    this.setup = true;
                    break;
                }
                default: {
                    return;
                }
            }
            if (p.info == 1) {
                this.url += "js?" + "info=" + p.info + "&casino=" + p.casino + "&game=" + p.game;
            }
            else if (p.info == 2) {
                this.url += "js?" + "info=" + p.info + "&casino=" + p.casino;
            }
            else if (p.info == 4) {
                this.url += "js?" + "info=" + p.info;
            }
            else if (p.info == 5) {
                this.url += "js?" + "info=" + p.info + "&group=" + p.group;
            }
            if (p.currency != null) {
                this.url += "&currency=" + p.currency;
            }
            if (p.type != null) {
                this.url += "&type=" + p.type;
            }
            if ("local" in p) {
                this.url += "&local=" + p.local;
                this.local = (p.local == 1 || p.local == 0 ? p.local : 2);
                this.setup = true;
            }
            if ("pos" in p) {
                this.url += "&pos=" + p.pos.toString();
            }
            if (p.sign != null) {
                this.url += "&sign=" + p.sign;
            }
            this.setup = true;
            if (p.type == 'count' || p.type == 'sum') {
                this.ticking = false;
                this.type = p.type;
                if (this.type == 'count') {
                    this.sign = '';
                }
            }
            this.index = tickers.length;
            tickers.push(this);
        }
        Ticker.prototype.attachToTextBox = function (id) {
            this.textbox = document.getElementById(id);
        };
        Ticker.prototype.debugTextBox = function (id) {
            this.debug = document.getElementById(id);
        };
        Ticker.prototype.SetCurrencySign = function (sign) {
            if (this.type != 'count') {
                this.sign = sign;
            }
        };
        Ticker.prototype.SetCurrencyPos = function (pos) {
            if (this.type != 'count') {
                this.signpos = pos;
            }
        };
        Ticker.prototype.countdown = function () {
            if (this.countDownTick == 10) {
                this.countDownTick = 0;
            }
            this.countDownTick++;
            if (this.countDownTick > 5) {
                this.countDownValue = this.parseCountdown();
            }
            this.showJackpot();
            setTimeout(this.countdownbinding, 1000);
        };
        Ticker.prototype.tick = function () {
            if (this.setup == false || this.textbox == null) {
                return;
            }
            if (this.tickerStartTime != 0 && this.ticking == false) {
                this.showJackpot();
                return;
            }
            if (this.countDownTick == -1 && this.countDownTarget != 0) {
                this.countDownTick = 0;
                this.countdown();
            }
            this.maybeUpdateData();
            this.showJackpot();
            setTimeout(this.binding, this.updateInterval);
        };
        Ticker.prototype.handleResponse = function (response) {
            var jp = this.tickerEndSum;
            var seed = 0;
            var step = 0;
            var hittime = 0;
            var xd, targetNode;
            var generationInterval = (response.endTime - response.startTime) + (response.execInterval * 60) + 180;
            this.downloadInterval = generationInterval * 1000;
            this.tickingPeriod = this.downloadInterval + 60000;
            xd = Ticker.parseFromString(response.jpxml);
            if (xd != null) {
                if (this.info == 4 && this.local == 2) {
                    var targetNodes = this.findTargetNodes(xd);
                    if (targetNodes && targetNodes.length > 0) {
                        jp = 0;
                        for (var i = 0; i < targetNodes.length; i++) {
                            var node = targetNodes[i];
                            var jpval = 0;
                            if (this.type == 'sum') {
                                jpval = parseFloat(node.getAttribute('wins'));
                            }
                            else if (this.type == 'count') {
                                jpval = parseFloat(node.getAttribute('winc'));
                            }
                            else if (node.firstChild && node.firstChild.nodeValue) {
                                jpval = parseFloat(node.firstChild.nodeValue);
                            }
                            if (!isNaN(jpval)) {
                                jp += jpval;
                            }
                            seed += (isNaN(parseFloat(node.getAttribute('seed'))) ? 0 : parseFloat(node.getAttribute('seed')));
                            step += (isNaN(parseFloat(node.getAttribute('step'))) ? 0 : parseFloat(node.getAttribute('step')));
                        }
                        if (jp == 0) {
                            jp = this.tickerEndSum;
                        }
                        if (this.sign == null) {
                            this.sign = targetNodes[0].getAttribute('sign');
                            if (this.sign.length == 3) {
                                this.sign = ' ' + this.currency.toUpperCase();
                                this.signpos = 1;
                            }
                        }
                        if (this.signpos == -1) {
                            this.signpos = parseInt(targetNodes[0].getAttribute('pos'));
                        }
                    }
                }
                else {
                    targetNode = this.findTargetNode(xd);
                    if (targetNode != null) {
                        if (this.type == 'sum') {
                            jp = parseFloat(targetNode.getAttribute('wins'));
                        }
                        else if (this.type == 'count') {
                            jp = parseFloat(targetNode.getAttribute('winc'));
                        }
                        else if (targetNode.firstChild && targetNode.firstChild.nodeValue) {
                            jp = parseFloat(targetNode.firstChild.nodeValue);
                        }
                        if (isNaN(jp) == true) {
                            jp = this.tickerEndSum;
                        }
                        if (this.sign == null) {
                            this.sign = targetNode.getAttribute('sign');
                            if (this.sign.length == 3) {
                                this.sign = ' ' + this.currency.toUpperCase();
                                this.signpos = 1;
                            }
                        }
                        if (this.signpos == -1) {
                            this.signpos = parseInt(targetNode.getAttribute('pos'));
                        }
                        seed = parseFloat(targetNode.getAttribute('seed'));
                        step = parseFloat(targetNode.getAttribute('step'));
                        hittime = Ticker.parseFromUnixString(targetNode.getAttribute('guaranteedHitTime'));
                        if (isNaN(seed) == true) {
                            seed = 0;
                        }
                        if (isNaN(step) == true) {
                            step = 0;
                        }
                        if (isNaN(hittime) == true) {
                            hittime = 0;
                        }
                    }
                }
            }
            this.setJackpot(jp, seed, step, hittime);
        };
        Ticker.prototype.parseCountdown = function () {
            var ret;
            var now = new Date().getTime();
            var gap = this.countDownTarget - now;
            if (gap < 0) {
                gap = 0;
            }
            var days = Math.floor(gap / (1000 * 60 * 60 * 24));
            var hours = (days * 24) + Math.floor((gap % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((gap % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((gap % (1000 * 60)) / 1000);
            ret = this.prettyTime(hours) + ":" + this.prettyTime(minutes) + ":" + this.prettyTime(seconds);
            return ret;
        };
        Ticker.prototype.prettyTime = function (val) {
            if (val < 10) {
                return "0" + val.toString();
            }
            return val.toString();
        };
        Ticker.parseFromUnixString = function (str) {
            var ret = NaN;
            if (str != null) {
                if (str.length != 0) {
                    ret = parseInt(str) * 1000;
                }
            }
            return ret;
        };
        Ticker.parseFromString = function (xs) {
            if (xs == '') {
                return null;
            }
            if ("DOMParser" in window) {
                var dp = new DOMParser();
                return dp.parseFromString(xs, "text/xml");
            }
            else {
                try {
                    var axo = new ActiveXObject("Microsoft.XMLDOM");
                    axo.async = false;
                    axo.loadXML(xs);
                    return axo;
                }
                catch (e) {
                    error = e.toString();
                    return null;
                }
            }
        };
        Ticker.prototype.findTargetNodes = function (xd) {
            if (this.type == 'count') {
                return xd.getElementsByTagName('total');
            }
            var targetNodes = [];
            var amountNodes = xd.getElementsByTagName('amount');
            for (var i = 0; i < amountNodes.length; i++) {
                if (amountNodes[i].getAttribute('currency').toLowerCase() == this.currency) {
                    targetNodes.push(amountNodes[i]);
                }
            }
            return targetNodes;
        };
        Ticker.prototype.findTargetNode = function (xd) {
            var baseElement = xd;
            var targetNode;
            if (this.info == 4) {
                var found = false;
                var totalElements = xd.getElementsByTagName('total');
                for (var i = 0; i < totalElements.length; i++) {
                    if (totalElements[i].getAttribute('local') == this.local.toString()) {
                        baseElement = totalElements[i];
                        found = true;
                    }
                }
                if (found == false) {
                    return null;
                }
                if (this.type == 'count') {
                    return baseElement;
                }
            }
            if (this.type == 'count') {
                targetNode = baseElement.getElementsByTagName(this.countElement)[0];
            }
            else {
                var amountNodes = baseElement.getElementsByTagName('amount');
                for (var i = 0; i < amountNodes.length; i++) {
                    if (amountNodes[i].getAttribute('currency').toLowerCase() == this.currency) {
                        targetNode = amountNodes[i];
                        break;
                    }
                }
            }
            return targetNode;
        };
        Ticker.prototype.setJackpot = function (jackpot, seed, step, hittime) {
            this.tickerEndSum = jackpot;
            var currentTcValue = this.getJackpot();
            var nrOfSteps = Math.round((this.tickingPeriod / this.updateInterval) * 100000000000) / 100000000000;
            if (step > 0) {
                this.tickerStartSum = Math.max(this.tickerEndSum - step * this.tickingPeriod / 1000, this.tickerEndSum * this.startPercent / 100, seed);
                this.tickerStartSum = Math.max(this.tickerStartSum, currentTcValue);
                this.tickStep = Math.min(step, (this.tickerEndSum - this.tickerStartSum) / nrOfSteps);
            }
            else {
                this.tickerStartSum = this.tickerEndSum * this.startPercent / 100;
                this.tickerStartSum = Math.max(this.tickerStartSum, currentTcValue);
                this.tickStep = (this.tickerEndSum - this.tickerStartSum) / nrOfSteps;
            }
            this.tickerStartTime = (new Date()).getTime();
            this.countDownTarget = hittime;
            if (this.debug == null) {
                return;
            }
            var text = '';
            if (this.info == 1) {
                text += 'GameTicker: ' + this.game + '/' + (this.casino ? this.casino : 'global') + '/' + this.currency;
            }
            if (this.info == 2) {
                text += 'CasinoTicker: ' + this.casino + '/' + this.currency;
            }
            if (this.info == 4) {
                text += 'TotalTicker: ' + (this.local == 2 ? '(local+global) ' : (this.local == 1 ? '(local) ' : 'global ')) + this.currency;
            }
            if (this.info == 5) {
                text += 'GroupTicker: ' + this.group + '/' + this.currency;
            }
            if (this.type) {
                text += ' - ' + this.type;
            }
            if (error == null) {
                this.debug.innerHTML =
                    text +
                        '<br>StartSum: ' + this.tickerStartSum +
                        '<br>EndSum: ' + this.tickerEndSum +
                        '<br>TickingPeriod: ' + this.tickingPeriod +
                        '<br>TickingStep: ' + this.tickStep +
                        '<br>' + this.url;
            }
            else {
                this.debug.innerHTML = text + '<br>' + error;
            }
        };
        Ticker.prototype.getJackpot = function () {
            var t = (new Date()).getTime();
            if (this.tickerStartTime == 0) {
                return 0;
            }
            if (this.ticking == false) {
                return this.tickerEndSum;
            }
            var nrOfSteps = (t - this.tickerStartTime) / this.updateInterval;
            return this.tickerStartSum + nrOfSteps * this.tickStep;
        };
        Ticker.prototype.maybeUpdateData = function () {
            if (this.xhr != null && this.xhr.isDownloading() == true) {
                return;
            }
            var t = (new Date()).getTime();
            if (t > this.downloadTime + this.downloadInterval) {
                this.downloadTime = t;
                if (this.xhr == null) {
                    this.xhr = new SameOriginXhr(this.url);
                }
                this.xhr.sendRealRequest(this.index);
                return;
            }
        };
        Ticker.prototype.showJackpot = function () {
            var v = this.getJackpot();
            if (v == 0) {
                this.textbox.innerHTML = 'UPDATING';
                return;
            }
            var r;
            if (this.type == 'count') {
                r = v.toString();
            }
            else if (this.countDownTick > 5 && this.countDownValue != "") {
                r = this.countDownValue;
            }
            else {
                if (toLocaleStringSupported == true) {
                    r = v.toLocaleString(undefined, {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    });
                }
                else {
                    r = (Math.round(v * 100) / 100).toFixed(2);
                }
                r = (this.signpos != 0 ? r + this.sign : this.sign + r);
            }
            this.textbox.innerHTML = r;
        };
        return Ticker;
    }());
    window.Ticker = Ticker;
})();