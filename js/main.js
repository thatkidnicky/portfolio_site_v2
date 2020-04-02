//burger menu

const burger = document.querySelector('.burger'),
      nav    = document.querySelector('.navContainer');

      function navToggle(){
          console.log('clicked nav');
          nav.classList.toggle('hide');
      }

      burger.addEventListener('click', navToggle);


const lightbox   = document.querySelector('.lightbox'),
      lightImg   = document.querySelector('.image'),
      portImages = document.querySelector('.portfolioSection').querySelectorAll('img'),
      xmark      = document.querySelector('.close'),
      dataDiv    = document.querySelector('.dataDiv');;


      function openlb(){
         // get dataDiv
          let data = this.parentElement.querySelector('.data').innerHTML;

          dataDiv.innerHTML = data;

          let name = this.src.split('images/')[1];
          let name2 = name.split('_square.jpg')[0];
          
          if(this.classList.contains('bruh')){
            lightImg.src = `images/${name2}`;
            console.log(name);
          }else{
            lightImg.src = `images/${name}`;
            console.log(name2);
          }
          

          lightbox.style.display = 'block';
      }

      function closelb(){
        lightbox.style.display = 'none';
      }

      xmark.addEventListener('click', closelb);
      portImages.forEach(img => img.addEventListener('click', openlb));



      const button1 = document.querySelector('#show1'),
            data1   = document.querySelector('.videoData1'),
            button2 = document.querySelector('#show2'),
            data2   = document.querySelector('.videoData2');

            function show1(){
                data1.classList.toggle('hidden');
            }
            button1.addEventListener('click', show1);

            function show2(){
                data2.classList.toggle('hidden');
            }
            button2.addEventListener('click', show2);


