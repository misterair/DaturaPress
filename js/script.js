function addClass(id,new_class){
       var i,n=0;

       new_class=new_class.split(",");

       for(i=0;i<new_class.length;i++){
               if((" "+document.getElementById(id).className+" ").indexOf(" "+new_class[i]+" ")==-1){
                       document.getElementById(id).className+=" "+new_class[i];
                       n++;
               }
       }

       return n;
}
function removeClass(id,classToRemove){

var i = 0,
n = 0,
$id = document.getElementById(id),
classes = classToRemove.split(",");

for(; i < classes.length; i++) {

if( $id.className.indexOf(classes[i]) > -1 ) {
$id.className = $id.className.replace(classes[i],'').replace(/^\s\s*/, '').replace(/\s\s*$/, '');
}
}
}
function removeAllClass(className) {
    var els = Array.prototype.slice.call(
        document.getElementsByClassName(className)
    );
    for (var i = 0, l = els.length; i < l; i++) {
        var el = els[i];
        el.className = el.className.replace(
            new RegExp('(^|\\s+)' + className + '(\\s+|$)', 'g'),
            '$1'
        );
    }
}
