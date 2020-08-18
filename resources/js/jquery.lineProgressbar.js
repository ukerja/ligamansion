/**
 * jQuery Line Progressbar
 * Author: KingRayhan<rayhan095@gmail.com>
 * Author URL: http://rayhan.info
 * Version: 1.0.0
 */

(function ($) {
    'use strict';
    $.fn.LineProgressbar = function (options) {

         options = $.extend({
            percentage: null,
            ShowProgressCount: true,
            duration: 1000,

            // Styling Options
            fillBackgroundColor: '#c9ddf5',
            backgroundColor: '#3c4b72',
            radius: '0px',
            height: '10px',
            width: '100%'
        }, options);

        $.options = options;
        return this.each(function (index, el) {
            // Markup
            $(el).html('<div class="progressbar"><div class="proggress"></div><div class="percentCount"></div></div>');



            var progressFill = $(el).find('.proggress');
            var progressBar = $(el).find('.progressbar');
            var percentageAct= parseInt(options.percentage * 5);

            progressFill.css({
                backgroundColor: options.fillBackgroundColor,
                height: options.height,
                borderRadius: options.radius
            });
            progressBar.css({
                width: options.width,
                backgroundColor: options.backgroundColor,
                borderRadius: options.radius
            });

            // Progressing
            if(percentageAct >100){
                progressFill.animate(
                    {
                        //width: options.percentage + "%"
                        
                        
                        width: "100%"
                    },
                    {
                        step: function (x) {
                            if (options.ShowProgressCount) {
                                $(el).find(".percentCount").html(Math.round(x/5) + "<span>Min</span>");
                            }
                        },
                        duration: options.duration
                    }
                );

            }else{
               progressFill.animate(
                    {
                        //width: options.percentage + "%"
                        
                        
                        width: parseInt(options.percentage * 5) + "%"
                    },
                    {
                        step: function (x) {
                            if (options.ShowProgressCount) {
                                $(el).find(".percentCount").html(Math.round(x/5) + "<span>Min</span>");
                            }
                        },
                        duration: options.duration
                    }
                ); 
            }
                
            ////////////////////////////////////////////////////////////////////
        });
    }
    $.fn.progressTo = function (next) {

        let options = $.options;

        return this.each(function (index, el) {

            var progressFill = $(el).find('.proggress');
            var progressBar = $(el).find('.progressbar');

            progressFill.animate(
                {
                    width: next + "%"
                },
                {
                    step: function (x) {
                        if (options.ShowProgressCount) {
                            $(el).find(".percentCount").text(Math.round(x) + "%");
                        }
                    },
                    duration: options.duration
                }
            );
            ////////////////////////////////////////////////////////////////////
        });
    }

})(jQuery);