$(document).ready(init);


function para1(){

  var new_x_1 = prompt("x");
  var new_y_1 = prompt("y");
  var new_z_1 = prompt("z");

  var new_x_2 = prompt("x");
  var new_y_2 = prompt("y");
  var new_z_2 = prompt("z");

  var new_x_3 = prompt("x");
  var new_y_3 = prompt("y");
  var new_z_3 = prompt("z");


  $.ajax({
      url : "class.php",
      method : "GET",
      data : {
        x1 : new_x_1,
        y1 : new_y_1,
        z1 : new_z_1,
        x2 : new_x_2,
        y2 : new_y_2,
        z2 : new_z_2,
        x3 : new_x_3,
        y3 : new_y_3,
        z3 : new_z_3
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
  para1();


}
