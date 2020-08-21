//Vars
let movieDiv = [];
let maxMovies = 6;

let moviePremieres  = document.getElementById("moviePremieres");
let movieClassics = document.getElementById("movieClassics");
let movieReleases = document.getElementById("movieReleases");

let linkAPI = 'https://api.themoviedb.org/3/movie/';
let keyAPI = '?api_key=b44921a525851971748a67195f894ac7';


//================TippyJS================//

tippy.setDefaultProps({
    delay: 280,
    duration: 500,
    arrow: false,
    animation: 'scale',
    hideOnClick: true,
    inertia: true,
    interactiveDebounce: 75,
    touch: 'hold',
    zIndex: 9999,
    allowHTML: true,
    placement: 'top',


});


//=========================================================//



class APIconection{
    static APIconect(id, container)
    {
        this.id = id;
        this.container = container;
        let img = 'https://image.tmdb.org/t/p/w300';

        //Reading API
        fetch(linkAPI+this.id+keyAPI)
        .then(function(res) {
            return res.json();
          })
        .then(data => {
            console.log(data);

            let template = 
            `
            <div class="coverDiv" alt="<b>Description:</b> ${data.overview}">
            <img src="${img+data.poster_path}" alt="">
            <p>
            ${data.title}
                <small>
                ${data.genres[0].name} 
                </small>
            </p>
            </div>
            `;
            

            container.innerHTML+=template;

            tippy(".coverDiv", {
                content: (reference) => reference.getAttribute('alt'),
                onShown() {
                    document.getElementById("mainSection").style.cursor = "help";
                  },
            });

        })
        .catch(error => console.error(error));



    }


}



//Summon in PREMIERES
for (let i = 0; i < maxMovies; i++) {
    APIconection.APIconect(i+100, moviePremieres);
}

//Summon in CLASSICS
for (let i = 0; i < maxMovies; i++) {
    APIconection.APIconect(i+200, movieClassics);
}

//Summon in RELEASES
for (let i = 0; i < maxMovies; i++) {
    APIconection.APIconect(i+300, movieReleases);
}




