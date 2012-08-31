/* 
 * Requires jQuery. This function is designed to make dynamic forms easier. It
 * clones everything inside a class="cloneable" element. See readme for more details.
 */

$(document).ready(function() {

	//Two dimensional array, ["cloneelement id", count, {jQuery Object}].
    var cloneOriginals = [];
	
	//Used to track number of cloneable elements given an id.
    var noid = 0;
	
	//Insert add and remove buttons if they do not exist.
    $('.cloneable').each(function() {
        if($(this).children('.addButton').length === 0) {
         $(this).append('<input type="button" class="addButton" value="add" />');
        }

        if($(this).children('.remButton').length === 0) {
         $(this).append('<input type="button" class="remButton" value="remove" />');
        }
		
    });

	//All remove buttons start disabled.
    $('.remButton').attr( 'disabled', 'disabled' );

    //Run when add button clicked.
	$('.addButton').click(function() {
	
		//Create id for cloneable element if ones does not exists.
        if($(this).parent().attr('id') === undefined) {
            var noidInc = noid + 1;
            $(this).parent().attr('id', 'undefinedId' + noidInc);
            noid = noidInc;
        }
		
		//If there is no user assigned limit, the limit is 100.
        var limit = parseInt($(this).parent().attr('limit'));
        if(isNaN(limit)) {
            limit = 100;
        }

		//The id of the cloneable element is used to identify it in the array of original objects.
		var cloneId = $(this).parent().attr('id');
		
		//Creats an object of cloneable element's id, number of times it's been used, and the jQuery object.
		var temp = {
			id: cloneId,
			count: 1,
			elem: $(this).parent().clone()
		}
		
		//Uses array prototypes (found below) to insert temp object if it is not already there.
		cloneOriginals.pushIfNotExist(temp, function(e) { 
			return e.id === temp.id;
		});
		
		//Finds the object by cloneable element id.
		for(var i =0; i < cloneOriginals.length; i++) {
			if(cloneOriginals[i].id === cloneId) {
				$fromArray = cloneOriginals[i].elem.clone();
				currentCount = cloneOriginals[i].count;
				newCount = currentCount + 1;
				cloneOriginals[i].count = newCount;
			}
		}

		//Increment or add number behind name attributes.
		var namesArray = [];
		$fromArray.find('[name]').each(function () {
			namesArray.push($(this).attr('name'));
		});
		
		var nameArrayLen = namesArray.length;
		for(var j = 0; j < nameArrayLen; j++) {
			$fromArray.find('[name]').eq(j).each(function () {
				$(this).attr('name', namesArray[j] + newCount).attr('value', '');
			});
		}
		
		//Increment or add number behind ids found inside cloneable element.
		var idsArray = [];
		$fromArray.find('[id]').each(function () {
			idsArray.push($(this).find('.cloneable:not(:contains(*))').attr('id'));
		});
		
		var idsArrayLen = idsArray.length;
		for(var j = 0; j < idsArrayLen; j++) {
			$fromArray.find('[id]').eq(j).each(function () {
				$(this).attr('id', idsArray[j] + newCount);
			});
		}

		//Insert just children of the original, except buttons.
		$justChilds = $fromArray.children(':not(.addButton, .remButton)');
		$justChilds.insertBefore($(this));
		
		$(this).parent().find('.remButton').attr( 'disabled', false );
		
		if(newCount === limit) {
			$(this).attr( 'disabled', 'disabled' );
		}

	});
	
	//Run when add button clicked.
	$('.remButton').click( function() {
	
		var cloneId = $(this).parent().attr('id');
	
        //Get count
        for(var i =0; i < cloneOriginals.length; i++) {
			if(cloneOriginals[i].id === cloneId) {
				$fromArray = cloneOriginals[i].elem.clone();
				currentCount = cloneOriginals[i].count;
				newCount = currentCount - 1;
				cloneOriginals[i].count = newCount;
			}
		}
		
		$justChilds = $fromArray.children(':not(.addButton, .remButton)')
		toRemoveSize = $justChilds.size();
		entireSize = $('#' + cloneId).children(':not(.addButton, .remButton)').size();
		//console.log(entireSize);
		//console.log(toRemoveSize);
		for(var j = toRemoveSize; j > 0; j--) {
			temp = toRemoveSize * (currentCount - 1);
			$('#' + cloneId).children(':not(.addButton, .remButton)').eq(temp).remove();
			console.log(temp);
		}
		
		//Enabled add button.
		$(this).parent().find('.addButton').attr( 'disabled', false );
		
		//If no removable elements remain, disable remove button.
        if(currentCount === 2) {
            $(this).parent().find('.remButton').attr( 'disabled', 'disabled' );
        }

    });

});

/*
 * Array.prototypes from Darin Dimitrov's answer at stackoverflow
 * http://stackoverflow.com/questions/1988349/array-push-if-does-not-exist
 */
// check if an element exists in array using a comparer function
// comparer : function(currentElement)
Array.prototype.inArray = function(comparer) { 
    for(var i=0; i < this.length; i++) { 
        if(comparer(this[i])) return true; 
    }
    return false; 
}; 

// adds an element to the array if it does not already exist using a comparer 
// function
Array.prototype.pushIfNotExist = function(element, comparer) { 
    if (!this.inArray(comparer)) {
        this.push(element);
    }
};