$(document).ready(function(){





	cat();
	brand();
	product();
    function cat(){
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {category:1},
			success: function(data){
            
				$('#get_cat').html(data);
			}
		})
	}

	function brand(){
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {brand:1},
			success: function(data){
				$('#get_brand').html(data);
			}
		})
	}

	function product(){
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {getProduct:1},
			success: function(data){
				$('#get_product').html(data);
			}
		})
    }
    $("body").delegate(".category","click",function(event){
		event.preventDefault();
		var cid=$(this).attr('cid');
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {get_selected_Category:1, cat_id:cid},
			success: function(data){
                
                $('#get_product').html(data);
               
			}
		})
    })
    $("body").delegate(".brand","click",function(event){
		event.preventDefault();
		var bid=$(this).attr('bid');
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {get_selected_brand:1, brand_id:bid},
			success: function(data){
				$('#get_product').html(data);
			}
		})
    })
    $('body').delegate('#price_sort','click',function(e){
		e.preventDefault();
		$(this).css('color','red');
		$('#pop_sort').css('color','black');
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {getProduct:1,price_sorted:1},
			success: function(data){
				$('#get_product').html(data);
			}
		})
    })
    $('body').delegate('#pop_sort','click',function(e){
		e.preventDefault();
		$(this).css('color','red');
		$('#price_sort').css('color','black');
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {getProduct:1,pop_sorted:1},
			success: function(data){
				$('#get_product').html(data);
			}
		})
	})
    
    page();
	function page(){
		$.ajax({
			url: 'action.php',
			method: 'POST',
			data: {page:1},
			success: function(data){
				$('#pageno').html(data);
			}
		})
	}
   
	$('body').delegate('.page','click',function(e){
		e.preventDefault();
		var pno=$(this).attr('page');
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {getProduct:1, setPage:1, pageNumber:pno},
			success: function(data){
				$('#get_product').html(data);
				$('body').animate({scrollTop:0},500);
			}
		})
    })
    cart_count();

	function cart_count(){
    
		$.ajax({
			url: 'action.php',
			method: 'POST',
			data: {cartcount:1},
			success: function(data){
                $('.badge').html(data);
                
				$('.badge').fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
			}
		})
    }
    $('body').delegate('.add_cart','click',function(){
        var product_id = $(this).attr('pid');
        var size=$(this).html();
        
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {addToProduct:1,proId:product_id,sizes:size},
			success: function(data){
				$('#cartmsg').html(data);
                cart_count();
                closeSize(product_id);
				$('html,body').animate({scrollTop:0},500);
			}
		})
    })
    $(document).mouseup(function(e) 
    {
        var container = $(".size");
    
        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0) 
        {
            container.hide();
        }
    });


    $('body').delegate('.box','click',function(e){
        e.preventDefault();
        var id = $(this).children("img").attr("alt");
        
        window.location.href = "store.php";
        
    })

/*
function check()
{
     
    var chek =$(":checkbox");
    for(var i=0;i<15;i++)
    {if(!(chek.eq(i).is(":checked")))
    {   
        chek.eq(i+15).prop("checked",true);
          var bh="."+chek.eq(i).val();
          var mat=$(bh);
          for(var j=0;j<mat.length;j++)
          {  
              mat.eq(j).css("display","block");
          }
    }

    } 
}*/

})


function sideOpen()
{   if(open==0)
   { $(".sidebar").css("display","block");
    open=1;
   }
   else{
    $(".sidebar").css("display","none");
    open=0;
   }
}
function openSize(n){   

   var sizes=document.getElementsByClassName("size");
   
    sizes[n-1].style.display="block";
    
}
function closeSize(n)
{
    var sizes=document.getElementsByClassName("size");
    
     sizes[n-1].style.display="none";
 
}

function remove(id)
{
    $.ajax({
        data:{'id':id,
               
                 },
        type:'POST',
        url:"remove.php",
        success: function(data){
            alert( data);
            window.location.href='checkout.php';
       }
});
}
function update(id,size)
{
    var r;
    if(size==1)
    r="S";
    else if(size==2)
    r="M";
    else if(size==3)
    r="L";
    else if(size==4)
    r="XL";
    else
    r="XXL";

    $.ajax({
        data:{'id':id,
                'size':r  },
        type:'POST',
        url:"update.php",
        success: function(data){
        
            window.location.href='checkout.php';
       }
});
}
function upda(id,r)
{

    $.ajax({
        data:{'id':id,
                'size':r  },
        type:'POST',
        url:"upda.php",
        success: function(data){
        
            window.location.href='checkout.php';
       }
});
}
