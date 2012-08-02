/* 
 * Requires jQuery. This function is designed to make dynamic forms easier. It
 * clones the first child element with the '.cloneable' element. Will also add
 * and increment numbers to name attributes inside the cloned element.
 * See accompanying README and example for more details.
 */
jQuery(function($) {

    //Remove button starts disabled.
    $('.btnDel').attr( 'disabled', 'disabled' );

    //Button to add cloned element.
    $('.btnAdd').click(function() {
        //Assign first child in .cloneable to variable.
        var $container = $(this).parent().children(':first');

        //Give and assign first element class to variable.
        var containerClass;
        if($container.attr('class') === undefined) {
            $container.attr('class', 'clone');
        }
        containerClass = $container.attr('class');

        //Give and assign first element id to variable.
        var containerId;
        if($container.attr('id') === undefined) {
            $container.attr('id', 'clone');
        }
        containerId = $container.attr('id');

        //User assigned attribute in HTML to define the max number of times element can be cloned.
        var limit = parseInt($container.parent().attr('limit'));

        //Counts all the siblings, adds one for new sibling.
        var num = $(this).siblings('.'+ containerClass).length;
        var numInc = num + 1;

        //Create array of element names attributes within first element.
        var namesArray = $.map($container.find('*'), function(val, i) {
            return $(val).attr('name');
        });

        //Add or increment numbers behind all name attributes in cloned element.
        var namesArrayInc = [];
        var namesArrayLen = namesArray.length;
        for(var i = 0; i < namesArrayLen; i++) {
            namesArrayInc.push(namesArray[i] + numInc);
        }

        //Clone original sibling, increments id if there is one.
        var $newContainer = $container.clone().attr('id', containerId + numInc);

        //Replace all name attributes within cloned element with updated names from array.
        for(var j = 0; j < namesArrayLen; j++) {
            $newContainer.find('[name]').eq(j).each(function () {
                $(this).attr('name', namesArrayInc[j]).attr('value', '');
            })
        }

        //Insert cloned element.
        if(num === 1) {
            $container.after($newContainer);
        } else {
            $('#' + containerId + num).after($newContainer);
        }

        //That's a little asinine, but it works.
        $(this).parent().find('.btnDel').attr('disabled', false);

        //Disbale add button when limit reached.
        if(numInc === limit) {
            //Transverse that DOM! Ride it like a lollercoster.
            $(this).parent().find('.btnAdd').attr('disabled', 'disabled');
        }

    })

    //Button to remove cloned element.
    $('.btnDel').click( function() {
        //Get number of containers.
        var $container = $(this).parent().children(':first');

        //Assign first element's class to variable.
        containerClass = $container.attr('class');

        //Assign first element's id to variable.
        containerId = $container.attr('id');

        //Count all elements with same class.
        numOfElements = $(this).siblings('.' + containerClass).length;

        //Mash it all together to find element to remove.
        var containerToRemove = containerId + numOfElements;

        //Remove it!
        $('#' + containerToRemove).remove();

        //Enable add button, always!
        $(this).parent().find('.btnAdd').attr( 'disabled', false );

        //If no removable elements remain, disable remove button.
        if(numOfElements === 2) {
            $(this).parent().find('.btnDel').attr( 'disabled', 'disabled' );
        }

    });

});