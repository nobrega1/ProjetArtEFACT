
import Products from 'entities/product/collection';
import ViewProducts from 'entities/product/viewCollection';

import Persons from 'entities/compte/collection';
import Tests from 'entities/test/collection';

 
let products = new Products();
let vProducts = new ViewProducts({
    collection: products,
    el:'#products-list'
});

//  products.fetch({reset:true})
 
    
products.fetch({reset:true,success:()=>{
    let p=products.models;
 

   
}});


    

//recherche
$(document).ready(function(){
    $("#productSearch").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#productTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });

     
      });
    
    });

  //selector
//   $(window).on('load', function () {  
  
//     $('#brand').selectpicker({  
//         'selectedText': 'cat'  
//     });  

//     // $('.selectpicker').selectpicker('hide');  
// });  
