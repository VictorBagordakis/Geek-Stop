//Filtro por gênero
function filtroGenero(){
    if(document.getElementById('masculino').checked) {
     document.getElementById("feminino").checked = false
     document.getElementById('secaoFeminina').style.display = "none";
     document.getElementById('secaoMasculina').style.display = "block";
     
    }
    else if(document.getElementById('feminino').checked) {
        document.getElementById('secaoFeminina').style.display = "block";
        document.getElementById('secaoMasculina').style.display = "none";
        document.getElementById("masculino").checked = false
        

    }
    else { 
            
        document.getElementById('secaoMasculina').style.display = "block"
        document.getElementById('secaoFeminina').style.display = "block"
        
    }
}

/*Lista com os ids das camisetas e os tamanhos disponívies*/
   var tamanhos = [

    {
      produto: 'camisetaMarioMasculina',
      tamanho: ['infantil','P', 'M', 'G', 'GG'],
      
    },
    {
        produto: 'camisetaDororoMasculina',
        tamanho: ['P', 'M', 'G', 'GG'],
        
      },
      {
        produto: 'camisetaSaintSeiyaMasculina',
        tamanho: ['infantil','P', 'M', 'G', 'GG'],
        
      },
      {
        produto: 'camisetaNarutoMasculina',
        tamanho: ['P', 'M', 'G', 'GG'],
        
      },
      {
        produto: 'camisetaFlashMasculina',
        tamanho: ['infantil','P', 'GG'],
        
      },
      {
        produto: 'camisetaIronManMasculina',
        tamanho: ['P', 'M', 'G'],
        
      },
      {
        produto: 'camisetaAvengersFeminina',
        tamanho: ['infantil','P', 'M', 'G', 'GG'],
        
      },
       
      
      {
        produto: 'camisetaStarWarsFeminina',
        tamanho: ['P', 'G', 'GG'],
        
      },
      {
        produto: 'camisetaGameOfThronesFeminina1',
        tamanho: ['infantil','P', 'M', 'G', 'GG'],
        
      },
      {
        produto: 'camisetaGameOfThronesFeminina2',
        tamanho: ['infantil','P', 'M', 'G', 'GG'],
        
      },
      {
        produto: 'camisetaBatmanFeminina1',
        tamanho: ['P', 'M', 'GG'],
        
      },
      {
        produto: 'camisetaBatmanFeminina2',
        tamanho: ['infantil','P', 'M', 'G'],
        
      },
      
  ];

//Filtro por tamanho
function filtroTamanho(){
     if(document.getElementById('infantil').checked){
        var indice = 0;
        while(indice <= tamanhos.length){
       
        var tam = tamanhos[indice];
        var i = tam.tamanho.length - 1; //qtd de tamanhos q cada camisa tem
        var verifica = false;
        while(i >= 0){
            
            if(tam.tamanho[i] == 'infantil'){
                verifica = true;
               
            }
            
            i--;
        } 
        if(verifica == true){
             document.getElementById(tam.produto).style.display = "block";
            
        }
        else{
            document.getElementById(tam.produto).style.display = "none";
        }
        indice++;
    }
        
    }
    if(document.getElementById('P').checked){
        var indice = 0;
        while(indice <= tamanhos.length){
           
            var tam = tamanhos[indice];
            var i = tam.tamanho.length - 1; //qtd de tamanhos q cada camisa tem
            var verifica = false;
        while(i >= 0){
            
            if(tam.tamanho[i] == 'P'){
                verifica = true;
               
            }
            
            i--;
        } 
        if(verifica == true){
             document.getElementById(tam.produto).style.display = "block";
            
        }
        else{
            document.getElementById(tam.produto).style.display = "none";
        } 
        
        indice++;
        }
    }
    if(document.getElementById('M').checked){
        var indice = 0;
        
        while(indice <= tamanhos.length){
           
            var tam = tamanhos[indice];
            var i = tam.tamanho.length - 1; //qtd de tamanhos q cada camisa tem
            var verifica = false;
            while(i >= 0){
                
                if(tam.tamanho[i] == 'M'){
                    verifica = true;
                   
                }
                
                i--;
            } 
            if(verifica == true){
                 document.getElementById(tam.produto).style.display = "block";
                
            }
            else{
                document.getElementById(tam.produto).style.display = "none";
            } 
            
        indice++;
        }
        
    }
    if(document.getElementById('G').checked){
        var indice = 0;
        while(indice <= tamanhos.length){
           
            var tam = tamanhos[indice];
            var i = tam.tamanho.length - 1; //qtd de tamanhos q cada camisa tem
            var verifica = false;
            while(i >= 0){
                
                if(tam.tamanho[i] == 'G'){
                    verifica = true;
                   
                }
                
                i--;
            } 
            if(verifica == true){
                 document.getElementById(tam.produto).style.display = "block";
                
            }
            else{
                document.getElementById(tam.produto).style.display = "none";
            } 
            
            indice++;
        }
        
    }
    if(document.getElementById('GG').checked){
        var indice = 0;
        while(indice <= tamanhos.length){
           
            var tam = tamanhos[indice];
            var i = tam.tamanho.length - 1; //qtd de tamanhos q cada camisa tem
            var verifica = false;
            while(i >= 0){
                
                if(tam.tamanho[i] == 'GG'){
                    verifica = true;
                   
                }
                
                i--;
            } 
            if(verifica == true){
                 document.getElementById(tam.produto).style.display = "block";
                
            }
            else{
                document.getElementById(tam.produto).style.display = "none";
            } 
            
            indice++;
        }
        
    }
    
        
 
}


/*Código para o funcionamento do Carousel. Para fazer o funcionamento Carousel, foi utilizado o código disponível em https://www.w3schools.com/howto/howto_js_slideshow.asp*/

var slideIndex = 1;
showSlides(slideIndex);

// Mudar para o próximo slide ou para o slide anterior
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("paginaCarousel");

    if(n>slides.length) {
        slideIndex = 1
    }
    if(n<1){
        slideIndex = slides.length
    }
    for(i = 0; i < slides.length; i++) 
    {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
}

function compararSenhas(){
    var senha = document.getElementById("senha").value;
    var confirmarSenha = document.getElementById("confirmarSenha").value;
    if(senha != confirmarSenha){
        alert("As senhas não coincidem!");
        return false;
    }
    return true;
}

function validarSenha(){
    var senha = document.getElementById("senha").value;
    if(senha.length < 10){
        alert("Sua senha deve possuir pelo menos 10 caracteres!");
        return false;
    }
    return true;
}