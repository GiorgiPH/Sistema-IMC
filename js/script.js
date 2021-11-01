document.addEventListener('DOMContentLoaded', function(){
    presionarBoton();
    
});
function presionarBoton(){
    const sexos=document.querySelectorAll('.sexos button');

    sexos.forEach(sexo =>{
        sexo.addEventListener('click', e =>{
        e.preventDefault()
        opcion =e.target.id;
        const opcAnterior = document.querySelector('.sexos .actual');
        if(opcAnterior) {
            opcAnterior.classList.remove('actual');
        }
    
        // Resalta el Tab Actual
        const opcActual = document.querySelector(`[id="${opcion}"]`);
        opcActual.classList.add('actual');
            })
        })
 
    
        
    
   
 }