function filter_color(color){
    var filter , ul , li , a, i;
    filter = color;
    ul = document.getElementById('list_product');
    li = document.getElementsByClassName('product');

    for (i=0; i<li.length; i++){
        a =li[i].getElementsByClassName('product_color')[0];
        if (a.innerHTML.toLowerCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        }
        else {
            li[i].style.display = "none";
        };
    };
};



function product_serch(){
    var input, filter , ul , li , a, i;
    input = document.getElementById('product_serch');
    filter = input.value.toLowerCase();

    ul = document.getElementById('list_product');
    li = document.getElementsByClassName('product');

    for (i=0; i<li.length; i++){
        a =li[i].getElementsByClassName('product_name')[0];
        if (a.innerHTML.toLowerCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        }
        else {
            li[i].style.display = "none";
        };
    };
};
