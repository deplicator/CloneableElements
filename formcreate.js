/* 
 * Requires jQuery. This function is designed to make dynamic forms by cloning 
 * a sibling element with the class name of 'cloneable'. Will also add and 
 * increment numbers to name attributes inside input elements inside 'cloneable' 
 * class. See accompanying README and example html for more details.
 */
jQuery(function($) {
    
    $('.btnDel').attr( 'disabled', 'disabled' );
    
    //Button to add cloned element.
    $('.btnAdd').click(function() {
        //Assign cloneable sibling to variable.
        var $container = $(this).parent().siblings('.cloneable');
        
        //Assign cloneable sibling's id to variable. This id is used for subsequent cloned elements.
        var containerId = $container.attr('id');
        
        //Made up attribute in HTML to define the max number of particular element.
        var limit = parseInt($container.attr('limit'));
        
        //Counts all the siblings, adds one for new sibling.
        var num = $(this).parent().siblings('*').length - 1;
        var numInc = num + 1;
        
        //Create array of input element names attributes within cloneable class.
        var namesArray = $.map($container.find('*'), function(val, i) {
            return $(val).attr('name');
        });
        
        //Add or increment numbers behind all name attributes in cloned element.
        var namesArrayInc = [];
        var namesArrayLen = namesArray.length;
        for(var i = 0; i < namesArrayLen; i++) {
            namesArrayInc.push(namesArray[i] + numInc);
        }

        //Clone original sibling, adding the incremented number to the id.
        var $newContainer = $container.clone().attr('id', containerId + numInc).removeClass('cloneable');
        
        //Replace all name attributes within cloned element with updated names from array.
        for(var j = 0; j < namesArrayLen; j++) {
            $newContainer.find('[name]').eq(j).each(function () {
                $(this).attr('name', namesArrayInc[j]).attr('value', '');
            })
        }
        
        //Insert cloned sibling at the end of the cloned siblings.
        if(num === 1) {
            $container.after($newContainer);
        } else {
            $('#' + containerId + num).after($newContainer);
        }
        
        //That's a little asinine, but it works.
        $('.btnDel').parent().siblings('#' + containerId).siblings().find('.btnDel').attr('disabled', false);
        
        //Disbale add button when limit reached.
        if(num === limit - 1) {
            //Transverse that DOM! Ride it like a lollercoster.
            $('.btnAdd').parent().siblings('#' + containerId).siblings().find('.btnAdd').attr('disabled', 'disabled');
        }

    })
    
    //Button to remove cloned element.
    $( '.btnDel' ).click( function() {
        //Get number of sibling containers.
        var num = $(this).parent().siblings('*').length - 1; 

        //Get id of clonable container.
        var containerId = $(this).parent().siblings('.cloneable').attr('id');
        
        //Mash them together to get last cloned element id.
        var containerToRemove = containerId + num;
        
        //Remove it!
        $('#' + containerToRemove).remove();
        
        //Enable add button, always!
        $('.btnAdd').parent().siblings('#' + containerId).siblings().find('.btnAdd').attr( 'disabled', false );
        
        //If no removable elements remain, disable remove button.
        if(num === 2) {
            //I admint, there could be a better way to do this.
            $('.btnDel').parent().siblings('#' + containerId).siblings().find('.btnDel').attr( 'disabled', 'disabled' );
        }

    });    
    
});