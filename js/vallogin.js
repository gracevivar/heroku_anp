$(function (){
    
    $('#ingresar').on('click',function (){
        var usu=$("#usu").val();
        var pass=$("#pass").val();
        var area=$("#area").val();
        var url='';
        var total=usu.length*pass.length*area.length;
        if(total>0){
            
        }else{
            $("#mensaje").addClass('error').html('Complete todos los campos').
                    show(300).delay(3000).hide(300);
        }
        
    })
    
    
    
})