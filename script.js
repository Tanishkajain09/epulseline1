
var img=["Our Specialist-4.jpg","Lighthouse.jpg","Penguins.jpg","Tulips.jpg"];
var i=0;
function slide()
{
//alert("hii")
var div=document.getElementById("slider");
div.style.backgroundImage="url('images/"+Our Specialist-4.jpg+"')";
i++;
if(img.length==i)
{
i=0;
}
window.setTimeout("slide()",1000);
}
