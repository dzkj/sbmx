/*
 * taobao date v0.1
 * Copyright (c) 2013-09-10 15:11 Jensen
 * 说明：全站通用JS
 */

//淘宝单日历 - 没有特殊假日和星期
	YUI({
        modules: {
            'trip-calendar': {
                fullpath: '../../resources/js/trip-calendar.js',
                type    : 'js',
                requires: ['trip-calendar-css']
            },
            'trip-calendar-css': {
                fullpath: '../../resources/css/trip-calendar.css',
                type    : 'css'
            }
        }
    }).use('trip-calendar', function(Y) {
    
        /**
         * 弹出式日历实例
         * 将日历与指定的触发元素绑定
         * 日历可根据浏览器窗口大小，自动调整显示位置
         */
        var oCal = new Y.TripCalendar({
            //绑定日历的节点，支持选择器模式，可批量设置（必选）
             triggerNode: '.J_Item'
        });
        
        oCal.on('dateclick', function(e) {
            this.getCurrentNode().setAttribute('data-date', e.date);
        });
        
        //显示日历时自定义事件
        oCal.on('show', function() {
            var v = this.getCurrentNode().getAttribute('data-date');
            this.set('date', v || new Date);
            this.set('selectedDate', v).render();
            this.set('count', 1).render();
            this.set('isHoliday', false).render();
            this.set('isDateInfo', false).render();
        });
        
        //解决chrome的foucs事件bug
        Y.on('click', function(e) {
            e.currentTarget.focus();
        }, 'button, .J_Link');
        
        $('.calendar-start-icon').css({background:'none','padding-right':0});

    });
    