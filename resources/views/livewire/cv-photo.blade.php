<div id="imgcontainer" class="relative duration-500 grid place-items-center rounded-md aspect-square overflow-hidden">
    <img id="profileImg" class="rounded absolute transition-all duration-500 opacity-100 cursor-pointer" src="{{ asset('storage/pf1.png') }}"  alt="Max Bernasconi's Profile Photo" onclick="imageChanged()">
    <script>
          let actualPhoto = 1;
          let countPhotos = {{ count($this->photos) }}
          let img = document.getElementById('profileImg');
          let imgContainer = document.getElementById('imgcontainer');
          img.src = "{{ asset('storage') }}"+"/pf" + actualPhoto + ".png";

          function imageChanged(){
          img.src = "{{ asset('storage') }}"+"/pf" + actualPhoto + ".png";
          let newPhoto = Math.floor(Math.random() * (countPhotos - 1 + 1)) + 1;
          if(countPhotos>1){
            while(newPhoto === actualPhoto)
          {
            newPhoto = Math.floor(Math.random() * (countPhotos - 1 + 1)) + 1;
            console.debug("rerroled");
          }
          }
          actualPhoto =  newPhoto;
          imgContainer.classList.remove('scale-100');
          imgContainer.classList.add('scale-95');
          img.classList.add('scale-110');
          img.classList.remove('scale-100');
          img.classList.remove('opacity-100');
          img.classList.add('opacity-0');
          setTimeout(() => {
            img.src = "{{ asset('storage') }}"+"/pf" + actualPhoto + ".png";
            img.classList.remove('opacity-0');
            img.classList.add('opacity-100');
            img.classList.remove('scale-110');
            img.classList.add('scale-100');
            imgContainer.classList.remove('scale-95');
            imgContainer.classList.add('scale-100');
          }, 250);
        }

    </script>

</div>
