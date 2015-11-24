function in_array(needle, haystack, strict) {
	    var found = false, key, strict = !!strict;
	    for (key in haystack) {
	        if ((strict && haystack[key] === needle) || (!strict && haystack[key] == needle)) {
	            found = true;
	            break;
	        }
	    }
	    return found;
	}
in_array('Sydorenko', ['Sydorenko', 'Victor', 'Employee']);
// or otherwise
Array.prototype.in_array = function(p_val) {
    for(var i = 0, l = this.length; i < l; i++)  {
        if(this[i] == p_val) {
            return true;
        }
    }
    return false;
}
var a = ['Sydorenko', 'Victor', 'Employee'];
a.in_array('Employee');
//---------------------------------
function trim( str, charlist ) {
    charlist = !charlist ? ' \s\xA0' : charlist.replace(/([\[\]\(\)\.\?\/\*\{\}\+\$\^\:])/g, '\$1');
    var re = new RegExp('^[' + charlist + ']+|[' + charlist + ']+$', 'g');
    return str.replace(re, '');
}
trim('    Sydorenko Victor is employee    ');
//---------------------------------