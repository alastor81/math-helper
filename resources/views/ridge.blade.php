<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .price-box {
            margin: 0 auto;
            background: #E9E9E9;
            border-radius: 10px;
            padding: 40px 15px;
            width: 500px;
        }

        .ui-widget-content {
            border: 1px solid #bdc3c7;
            background: #e1e1e1;
            color: #222222;
            margin-top: 4px;
        }

        .ui-state-default, .ui-widget-content .ui-state-default {
            background: transparent !important;
            border: none !important;
        }

        .ui-slider .ui-slider-handle label {
            background: #428bca;
            border-radius: 20px;
            width: 5.2em;
        }

        .ui-slider .ui-slider-handle {
            position: absolute;
            z-index: 2;
            width: 5.2em;
            height: 100px;
            cursor: default;
            margin: 0 -40px auto !important;
            text-align: center;
            line-height: 35px;
            color: #FFFFFF;
            font-size: 15px;

        }

        .ui-slider .ui-slider-handle .glyphicon {
            color: #FFFFFF;
            margin: 0 3px;
            font-size: 11px;
            opacity: 0.5;
        }

        .ui-corner-all {
            border-radius: 20px;
        }

        .ui-slider-horizontal .ui-slider-handle {
            top: -.9em;
        }

        .ui-state-default,
        .ui-widget-content .ui-state-default {
            border: 1px solid #f9f9f9;
            background: #3498db;
        }

        .ui-slider-horizontal .ui-slider-handle {
            margin-left: -0.5em;
        }

        .ui-slider .ui-slider-handle {
            cursor: pointer;
        }

        .ui-slider a,
        .ui-slider a:focus {
            cursor: pointer;
            outline: none;
        }

        .price, .lead p {
            font-weight: 600;
            font-size: 32px;
            display: inline-block;
            line-height: 60px;
        }

        h4.great {
            background: #00ac98;
            margin: 0 0 25px -60px;
            padding: 7px 15px;
            color: #ffffff;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            display: inline-block;
            -moz-box-shadow: 2px 4px 5px 0 #ccc;
            -webkit-box-shadow: 2px 4px 5px 0 #ccc;
            box-shadow: 2px 4px 5px 0 #ccc;
        }

        .total {
            border-bottom: 1px solid #7f8c8d;
            /*display: inline;
            padding: 10px 5px;*/
            position: relative;
            padding-bottom: 20px;
        }

        .total:before {
            content: "";
            display: inline;
            position: absolute;
            left: 0;
            bottom: 5px;
            width: 100%;
            height: 3px;
            background: #7f8c8d;
            opacity: 0.5;
        }

        .price-slider {
            margin-bottom: 70px;
        }

        .price-slider span {
            font-weight: 200;
            display: inline-block;
            color: #7f8c8d;
            font-size: 13px;
        }

        .form-pricing {
            background: #ffffff;
            padding: 20px;
            border-radius: 4px;
        }

        .price-form {
            background: #ffffff;
            margin-bottom: 10px;
            padding: 20px;
            border: 1px solid #eeeeee;
            border-radius: 4px;
            /*-moz-box-shadow:    0 5px 5px 0 #ccc;
              -webkit-box-shadow: 0 5px 5px 0 #ccc;
              box-shadow:         0 5px 5px 0 #ccc;*/
        }

        .form-group {
            margin-bottom: 0;
        }

        .form-group span.price {
            font-weight: 200;
            display: inline-block;
            color: #7f8c8d;
            font-size: 14px;
        }

        .help-text {
            display: block;
            margin-top: 32px;
            margin-bottom: 10px;
            color: #737373;
            position: absolute;
            /*margin-left: 20px;*/
            font-weight: 200;
            text-align: right;
            width: 188px;
        }

        .price-form label {
            font-weight: 200;
            font-size: 21px;
        }

        img.payment {
            display: block;
            margin-left: auto;
            margin-right: auto
        }

        .ui-slider-range-min {
            background: #2980b9;
        }

        /* HR */

        hr.style {
            margin-top: 0;
            border: 0;
            border-bottom: 1px dashed #ccc;
            background: #999;
        }

        }
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <br><br>
    <!-- START -->
    <div class="price-box">

        <form class="form-horizontal form-pricing" role="form">

            <div class="price-slider">
                <h4 class="great">your number</h4>
                <span>step : 0.0001 | min : -15 | max : 150</span>
                <div class="col-sm-12">
                    <div id="slider"></div>
                </div>
            </div>
            <div class="price-slider">
                <h4 class="great">root of your number</h4>
                <span>step : 1 | min : 0 | max : 15</span>
                <div class="col-sm-12">
                    <div id="slider2"></div>
                </div>
            </div>

            <div class="price-form">

                <div class="form-group">
                    <label for="amount" class="col-sm-6 control-label">your number : </label>
                    <div class="col-sm-6">
                        <input type="hidden" id="amount" class="form-control">
                        <input type="number" class="form-controller" id="amount-label" onchange="update1()" step="0.0001" min="-15" max="150">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="duration" class="col-sm-6 control-label">root : </label>
                    <div class="col-sm-6">
                        <input type="hidden" id="duration" class="form-control">
                        <input type="number" class="form-controller" id="duration-label" onchange="update1()" min="0" max="15">
                    </div>
                </div>
                <hr>
                <div class="form-group total">
                    <label for="total" class="col-sm-6 control-label"><strong>result : </strong></label>
                    <span class="help-text">(number ^ 1/root)</span>
                    <div class="col-sm-6">
                        <input type="hidden" id="total" class="form-control">
                        <p class="price lead" id="total-label"></p>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
<script>
    /*!
* jQuery UI Touch Punch 0.2.3
*
* Copyright 2011–2014, Dave Furfero
* Dual licensed under the MIT or GPL Version 2 licenses.
*
* Depends:
*  jquery.ui.widget.js
*  jquery.ui.mouse.js
*/
    (function ($) {

        // Detect touch support
        $.support.touch = 'ontouchend' in document;

        // Ignore browsers without touch support
        if (!$.support.touch) {
            return;
        }

        var mouseProto = $.ui.mouse.prototype,
            _mouseInit = mouseProto._mouseInit,
            _mouseDestroy = mouseProto._mouseDestroy,
            touchHandled;

        /**
         * Simulate a mouse event based on a corresponding touch event
         * @param {Object} event A touch event
         * @param {String} simulatedType The corresponding mouse event
         */
        function simulateMouseEvent(event, simulatedType) {

            // Ignore multi-touch events
            if (event.originalEvent.touches.length > 1) {
                return;
            }

            event.preventDefault();

            var touch = event.originalEvent.changedTouches[0],
                simulatedEvent = document.createEvent('MouseEvents');

            // Initialize the simulated mouse event using the touch event's coordinates
            simulatedEvent.initMouseEvent(
                simulatedType,    // type
                true,             // bubbles
                true,             // cancelable
                window,           // view
                1,                // detail
                touch.screenX,    // screenX
                touch.screenY,    // screenY
                touch.clientX,    // clientX
                touch.clientY,    // clientY
                false,            // ctrlKey
                false,            // altKey
                false,            // shiftKey
                false,            // metaKey
                0,                // button
                null              // relatedTarget
            );

            // Dispatch the simulated event to the target element
            event.target.dispatchEvent(simulatedEvent);
        }

        /**
         * Handle the jQuery UI widget's touchstart events
         * @param {Object} event The widget element's touchstart event
         */
        mouseProto._touchStart = function (event) {

            var self = this;

            // Ignore the event if another widget is already being handled
            if (touchHandled || !self._mouseCapture(event.originalEvent.changedTouches[0])) {
                return;
            }

            // Set the flag to prevent other widgets from inheriting the touch event
            touchHandled = true;

            // Track movement to determine if interaction was a click
            self._touchMoved = false;

            // Simulate the mouseover event
            simulateMouseEvent(event, 'mouseover');

            // Simulate the mousemove event
            simulateMouseEvent(event, 'mousemove');

            // Simulate the mousedown event
            simulateMouseEvent(event, 'mousedown');
        };

        /**
         * Handle the jQuery UI widget's touchmove events
         * @param {Object} event The document's touchmove event
         */
        mouseProto._touchMove = function (event) {

            // Ignore event if not handled
            if (!touchHandled) {
                return;
            }

            // Interaction was not a click
            this._touchMoved = true;

            // Simulate the mousemove event
            simulateMouseEvent(event, 'mousemove');
        };

        /**
         * Handle the jQuery UI widget's touchend events
         * @param {Object} event The document's touchend event
         */
        mouseProto._touchEnd = function (event) {

            // Ignore event if not handled
            if (!touchHandled) {
                return;
            }

            // Simulate the mouseup event
            simulateMouseEvent(event, 'mouseup');

            // Simulate the mouseout event
            simulateMouseEvent(event, 'mouseout');

            // If the touch interaction did not move, it should trigger a click
            if (!this._touchMoved) {

                // Simulate the click event
                simulateMouseEvent(event, 'click');
            }

            // Unset the flag to allow other widgets to inherit the touch event
            touchHandled = false;
        };

        /**
         * A duck punch of the $.ui.mouse _mouseInit method to support touch events.
         * This method extends the widget with bound touch event handlers that
         * translate touch events to mouse events and pass them to the widget's
         * original mouse event handling methods.
         */
        mouseProto._mouseInit = function () {

            var self = this;

            // Delegate the touch handlers to the widget's element
            self.element.bind({
                touchstart: $.proxy(self, '_touchStart'),
                touchmove: $.proxy(self, '_touchMove'),
                touchend: $.proxy(self, '_touchEnd')
            });

            // Call the original $.ui.mouse init method
            _mouseInit.call(self);
        };

        /**
         * Remove the touch event handlers
         */
        mouseProto._mouseDestroy = function () {

            var self = this;

            // Delegate the touch handlers to the widget's element
            self.element.unbind({
                touchstart: $.proxy(self, '_touchStart'),
                touchmove: $.proxy(self, '_touchMove'),
                touchend: $.proxy(self, '_touchEnd')
            });

            // Call the original $.ui.mouse destroy method
            _mouseDestroy.call(self);
        };

    })(jQuery);

</script>


<script type="text/javascript">
    $(document).ready(function () {
        $("#slider").slider({
            animate: true,
            value: 0,
            min: -15,
            max: 150,
            step: 0.0001,
            slide: function (event, ui) {
                update(1, ui.value); //changed
            }
        });

        $("#slider2").slider({
            animate: true,
            value: 0,
            min: 0,
            max: 15,
            step: 1,
            slide: function (event, ui) {
                update(2, ui.value); //changed
            }
        });

        //Added, set initial value.
        $("#amount").val(0);
        $("#duration").val(0);
        $("#amount-label").val(0);
        $("#duration-label").val(0);

        update();
    });

    //changed. now with parameter
    function update(slider, val) {
        //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
        var $amount = slider == 1 ? val : $("#amount").val();
        var $duration = slider == 2 ? val : $("#duration").val();
        // var $amount =  $("#amount-label").val();
        // var $duration =$("#duration-label").val();
        $total = Math.pow($amount, $duration);


        $("#amount-label").val($amount);
        $("#amount").val($("#amount-label").val());

        $("#duration-label").val($duration);
        $("#duration").val($("#duration-label").val());




        $("#total").val($total);
        $("#total-label").text($total);

        $('#slider a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> ' + $amount + ' <span class="glyphicon glyphicon-chevron-right"></span></label>');
        $('#slider2 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> ' + $duration + ' <span class="glyphicon glyphicon-chevron-right"></span></label>');
    }
    function update1() {
        // var $amount =  $("#amount-label").val();
        // $("#duration-label").val($duration);

        $("#duration").val($("#duration-label").val());
        $("#amount").val($("#amount-label").val());


        // $("#amount-label").val($amount);
        var $amount = slider == 1 ? val : $("#amount").val();
        var $duration = slider == 2 ? val : $("#duration").val();
        // var $duration =$("#duration-label").val();
        $total = Math.pow($amount, 1/$duration);



        $("#total").val($total);
        $("#total-label").text($total);

        $('#slider a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> ' + $amount + ' <span class="glyphicon glyphicon-chevron-right"></span></label>');
        $('#slider2 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> ' + $duration + ' <span class="glyphicon glyphicon-chevron-right"></span></label>');
    }

</script>
</body>
</html>