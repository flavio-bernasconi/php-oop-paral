$(document).ready(init);


function addData(){

  var new_x = prompt("x");
  var new_y = prompt("y");
  var new_z = prompt("z");


  $.ajax({
      url : "class.php",
      method : "GET",
      data : {
        x1 : new_x,
        y1 : new_y,
        z1 : new_z
      },
      success : function(data){
        console.log(data);

    },//fine success
    error: function(err){
      console.log(err);
    }
  })

}



function  init(){
  console.log("funziona");
  addData()

}
