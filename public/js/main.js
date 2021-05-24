// Menu Responsive
try{
    const selectElement = (element) => document.querySelector(element);
    selectElement(' .menu-icons').addEventListener('click', () =>{
        selectElement('nav').classList.toggle('mobile')
    });
}catch (e) {
    console.log(e);
}

//function loader website
try {
    // add loader to website
    window.addEventListener('load', function(){
        document.getElementById('mainCont').classList.add('loaded');
    });
}catch (e) {
    console.log(e);
}

// Player youtube for article
try{
    // Select div element by its id attribute
    let BtnPlay = document.getElementById("play");
    let ModalVideo = document.querySelector('#ModalPlayer');

    BtnPlay.addEventListener('click', function () {
        alert();
        // ModalVideo.classList.add('is-player');
    });

    ModalVideo.addEventListener('click', function () {
        this.classList.remove('is-player')
    });

}catch (e) {
    console.log(e);
}

//upload image profil
try{
    //upload image in setting profil
    const inpFile= document.getElementById('inpFile');
    const avatarProfile = document.getElementById('avatar-profile');
    const cameraIcon = document.getElementById('camera-icon');

    inpFile.addEventListener("change", function(){
        const file = this.files[0];
        if (file){
            const reader = new FileReader();
            reader.addEventListener("load", function (e) {
                const {result} = e.target;
                avatarProfile.setAttribute('src', result);
                cameraIcon.style.display = "none";
            });
            reader.readAsDataURL(file);
        }
    });

}catch (e){
    console.log(e);
}

//Button scroll top
try {
    //scroll button top
        const topLink = document.querySelector(".top-link");
        const navbar = document.querySelector('nav');
        window.addEventListener("scroll", function () {
            const scrollHeight = window.pageYOffset;
            // setup back to top link
            if (scrollHeight > 500) {
                topLink.classList.add("show-link");
            } else {
                topLink.classList.remove("show-link");
            }
        });

    // select links
    const scrollLinks = document.querySelectorAll(".scroll-link");
    scrollLinks.forEach((link) => {
        link.addEventListener("click", (e) => {
            // prevent default
            e.preventDefault();
            // navigate to specific spot
            const id = e.currentTarget.getAttribute("href").slice(1);
            const element = document.getElementById(id);
            const navHeight = navbar.getBoundingClientRect().height;
            let position = element.offsetTop - navHeight;

            window.scrollTo({
                left: 0,
                top: position,
            });
        });
    });
} catch (e) {
    console.log(e);
}

//Hide login
try {
    //Hide login and register when click search
    const inputSearch = document.querySelector('.search .search__field #search');
    const itemLogin = document.querySelector('.section-reglogin');
    // const body = document.querySelector('body');
//Events
    inputSearch.addEventListener('click', closeItemNav);
    window.addEventListener('click', outsideClick);

    function closeItemNav(){
        itemLogin.classList.add('hide__msg');
    }

    function outsideClick(e) {
        if (e.target !== inputSearch) {
            itemLogin.classList.remove('hide__msg');
        }
    }

}catch (e) {
    console.log(e);
}

// function couleur table nth-child
function colorTable(tags){
    for(let tag of tags){
        tag.classList.add('fontLigne');
    }
};
// couleur ligne accordeon sommaire
let tabSommaire = document.querySelectorAll('.tab__content__sommaire__items li:nth-child(even)');
colorTable(tabSommaire);

// Styliser les lignes du tableau template forum
let tabLigne = document.querySelectorAll('tbody tr:nth-child(even)');
colorTable(tabLigne);

//script ouverture button de partage social
try {
    // Script ouverture button de partage
    (function () {
        let btnShow = document.querySelector('#show-btn');
        let menuBtnSocial = document.querySelector('.sm-menu');
        const onShow = function () {
            // menuBtnSocial.className = "show-btn-social";
            setTimeout(function () {
                menuBtnSocial.classList.toggle('show-btn-social');
                menuBtnSocial.classList.toggle('fadeInTop');
            }, 500);
        }
        btnShow.addEventListener('click', onShow);
    })();
} catch (e) {
    console.log(e);
}

// bar progress page of article
try{
    (function () {
        let scrollBar = document.querySelector('#progress');
        const scrollBarFill = function () {
            //calcul de le hauteur
            const scrollable = document.documentElement.scrollHeight - window.innerHeight;
            const  scrolled = window.scrollY;

            let perentageScrolled = 100;
            //    quand utiliser le function scroll
            if (scrollable > 0){
                perentageScrolled = Math.ceil(scrolled / scrollable * 100 );
            }
            scrollBar.style.width = perentageScrolled + '%';
        }
        window.addEventListener('scroll', scrollBarFill);
    })();
}catch (e) {
    console.log(e);
}

//Accordeopn menu sommaire
try {
    // Accordeion menu sommaire
    let accordions = document.getElementsByClassName("tab__content__sommaire__header");

    for (let i = 0; i < accordions.length; i++) {
        accordions[i].onclick = function() {
            this.classList.toggle('open');

            let content = this.nextElementSibling;
            if (content.style.maxHeight) {
                // accordion is currently open, so close it
                content.style.maxHeight = null;
            } else {
                // accordion is currently closed, so open it
                content.style.maxHeight = content.scrollHeight + "px";
            }
        }
    }

}catch (e) {
    console.log(e);
}

// show & hide mot de pass form
let loginPwdStatus = false;
function toggle() {
    if (loginPwdStatus) {
        document.getElementById("password-key").setAttribute("type", "password");
        document.getElementById("eye").classList.add('fa-eye');
        document.getElementById("eye").classList.remove('fa-eye-slash');
        loginPwdStatus = false;
    } else {
        document.getElementById("password-key").setAttribute("type", "text");
        document.getElementById("eye").classList.remove('fa-eye')
        document.getElementById("eye").classList.add('fa-eye-slash');
        loginPwdStatus = true;
    }
}

// systeme d'onglets
try{
    (function(){
        let afficherOnglet = function (a, animations){
            if(animations === undefined){
                animations = true
            }
            let li = a.parentNode
            let div = a.parentNode.parentNode.parentNode.parentNode.parentNode
            let  activeTab = div.querySelector('.tab-content.active') // contenu actif
            let  soitAfficher = div.querySelector(a.getAttribute('href')) // contenu a afficher

            if(li.classList.contains('active')){
                return false
            }
            // On retire la class active de l'onglet actif
            div.querySelector('.tabs .active').classList.remove('active')
            // j'ajoute la class active à l'onglet actuel
            li.classList.add('active')

            if(animations){
                activeTab.classList.add('fade')
                activeTab.classList.remove('in')
                let transitionend = function () {
                    this.classList.remove('fade')
                    this.classList.remove('active')
                    soitAfficher.classList.add('active')
                    soitAfficher.classList.add('fade')
                    soitAfficher.offsetwidth
                    soitAfficher.classList.add('in')
                    activeTab.removeEventListener('transitionend',transitionend)
                }
                activeTab.addEventListener('transitionend', transitionend)
            } else{
                soitAfficher.classList.add('active')
                activeTab.classList.remove('active')
            }
        }

        let tabs = document.querySelectorAll('.tabs a')
        for(let i = 0; i < tabs.length; i++){
            tabs[i].addEventListener('click' , function (e){
                afficherOnglet(this)
            })
        }

        let hashChange = function (e){
            let hash = window.location.hash
            let a = document.querySelector('a[href="' + hash + '"]')
            if (a !== null && !a.parentNode.classList.contains('active')){
                afficherOnglet(a, e !== undefined)
            }
        }
        window.addEventListener('hashchange', hashChange)
        hashChange()
    })()
}catch (e) {
    console.log(e);
}

//button show reset form
try{
    //button show reset form
    (function resetMsg() {
        let submit = document.getElementById('show__msg');
        let message = document.getElementById("msg");
        submit.addEventListener('click', function (e) {
            e.preventDefault();
            message.className = "show";
            setTimeout(function () {
                message.classList.toggle('show')
            }, 2000);
        });

    })();
}catch (e) {
    console.log(e);
}

//alert forget password
try {
    (function forgetMsg() {
        let submitForget = document.getElementById('show__msg-forget');
        let message = document.getElementById("msg__forget");
        submitForget.addEventListener('click', function (e) {
            e.preventDefault();
            message.className = "show";
            setTimeout(function () {
                message.classList.toggle('show')
            }, 2000);
        });
    })();
}catch (e) {
    console.log(e);
}

// click button Sommaire
try {
    (function sommaire() {
        // click button Sommaire
        let btnSommaire = document.querySelector('#btn__sommaire');
        let sidebarSommaire = document.querySelector('.sidebar__menu__formation');
        let sidebarWidgetlearning = document.querySelector('.widget__learning');
        btnSommaire.addEventListener('click', function () {
            setTimeout(function () {
                sidebarWidgetlearning.classList.toggle('hideSide');
            }, 500);
            sidebarSommaire.classList.toggle('hidden');
        });
    })();

}catch (e) {
    console.log(e);
}

//editeur de texte quill
try {
    // editeur de texte Quill
    let toolbarOptions =  [
        ['bold', 'italic', 'underline', 'strike'],
        ['blockquote', 'code-block'],
        // [{ 'script': 'sub'}, { 'script': 'super' }],
        [{ 'indent': '-1'}, { 'indent': '+1' }],
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
        [{'list' : 'ordered'},
            {'list' : 'bullet'}],
        ['link', 'image'],
        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
        [{ 'font': [] }],
        [{ 'align': [] }],
        ['clean']                                         // remove formatting button

    ];

    let quill = new Quill('#editor', {

        modules: {
            toolbar: toolbarOptions,
            history: {
                delay: 2000,
                maxStack: 500,
                userOnly: true
            }
        },
        theme: 'snow'
    });

// Personnalisation de la police d'ecriture de quill
    let FontAttributor = Quill.import('attributors/class/font');
    FontAttributor.whitelist = [
        'Raleway', 'Poppins','sans-serif'
    ];
    Quill.register(FontAttributor, true);

}catch (e) {
    console.log(e);
}

//function de partage button reseau social
try{
    // Fonction partage de bouton social
    (function(){

        let popupCenter = function(url, title, width, height){
            let popupWidth = width || 640;
            let popupHeight = height || 320;
            let windowLeft = window.screenLeft || window.screenX;
            let windowTop = window.screenTop || window.screenY;
            let windowWidth = window.innerWidth || document.documentElement.clientWidth;
            let windowHeight = window.innerHeight || document.documentElement.clientHeight;
            let popupLeft = windowLeft + windowWidth / 2 - popupWidth / 2 ;
            let popupTop = windowTop + windowHeight / 2 - popupHeight / 2;
            let popup = window.open(url, title, 'scrollbars=yes, width=' + popupWidth + ', height=' + popupHeight + ', top=' + popupTop + ', left=' + popupLeft);
            popup.focus();
            return true;
        };

        document.querySelector('.share_twitter').addEventListener('click', function(e){
            e.preventDefault();
            let url = this.getAttribute('data-url');
            let shareUrl = "https://twitter.com/intent/tweet?text=" + encodeURIComponent(document.title) +
                "&via=Dywants_com" +
                "&url=" + encodeURIComponent(url);
            popupCenter(shareUrl, "Partager sur Twitter");
        });

        document.querySelector('.share_facebook').addEventListener('click', function(e){
            e.preventDefault();
            let url = this.getAttribute('data-url');
            let shareUrl = "https://www.facebook.com/sharer/sharer.php?url=" + encodeURIComponent(url);
            popupCenter(shareUrl, "Partager sur facebook");
        });

        document.querySelector('.share_gplus').addEventListener('click', function(e){
            e.preventDefault();
            let url = this.getAttribute('data-url');
            let shareUrl = "https://plus.google.com/share?url=" + encodeURIComponent(url);
            popupCenter(shareUrl, "Partager sur Google+");
        });

        document.querySelector('.share_linkedin').addEventListener('click', function(e){
            e.preventDefault();
            let url = this.getAttribute('data-url');
            let shareUrl = "https://www.linkedin.com/shareArticle?url=" + encodeURIComponent(url);
            popupCenter(shareUrl, "Partager sur Linkedin");
        });

    })();
}catch (e){
    console.log(e);
}
// sticke menu when scroll
(function(){
    //function detection hauteur de page apres le scroll
    const scrollY = function(){
        let supportPageOffset = window.pageXOffset !== undefined;
        let isCSS1Compat = ((document.compatMode || "") === "CSS1Compat");
        return  supportPageOffset ? window.pageYOffset : isCSS1Compat ? document.documentElement.scrollTop : document.body.scrollTop;
    }

    let elements = document.querySelectorAll('[data-sticky]');

    window.makeSticky = function (element) {
        //variables
        let rect = element.getBoundingClientRect(); // function permettant de voir le position d'element par rapport à son position initiale
        let offset = parseInt(element.getAttribute('data-offset') || 0, 10);
        // if (element.getAttribute('data-constraint')){ //ici on selectionne l'element donc on venu delimiter le scroll
        //     let constraint = document.querySelector(element.getAttribute('data-constraint'));
        // }else {
        //     let constraint = document.body;
        // }
        let constraint = element.getAttribute('data-constraint');
        if (element.getAttribute('data-constraint')){ //ici on selectionne l'element donc on venu delimiter le scroll
            return constraint;
        }else {
            constraint = document.body;
        }
        let constraintRect = constraint.getBoundingClientRect();
        let constraintBottom = constraintRect.top + scrollY() + constraintRect.height -offset - rect.height;
        let top = rect.top + scrollY();
        let fake = document.createElement('div');
        fake.style.width = rect.width + 'px';
        fake.style.height = rect.height + 'px';

        //functions
        const onScroll = function () {
            // let hasScrollClass = element.classList.contains('fixed');
            if (scrollY() > constraintBottom && element.style.position != 'absolute') {
                element.style.position = 'absolute';
                element.style.bottom = '0';
                element.style.top = 'auto';
            } else if (scrollY() > top - offset && scrollY() < constraintBottom && element.style.position != 'fixed') {
                element.classList.add('fixed');
                element.style.position = 'fixed';
                element.style.top = offset + "px";
                element.style.bottom = 'auto';
                element.style.width = rect.width + 'px';
                element.parentNode.insertBefore(fake, element);
            } else if (scrollY() < top - offset && element.style.position != 'static') {
                element.classList.remove('fixed');
                element.style.position = 'static';
                if (element.parentNode.contains(fake)) {
                    element.parentNode.removeChild(fake);
                }
            }
        }

        const onResize = function () {
            element.style.width = "auto";
            element.classList.remove('fixed');
            element.style.position = "static";
            fake.style.display = "none";
            rect = element.getBoundingClientRect(); // On recalcul la nvelle valeur de l'element
            constraintRect = constraint.getBoundingClientRect();
            constraintBottom = constraintRect.top + scrollY() + constraintRect.height - offset - rect.height;
            top = rect.top + scrollY();
            fake.style.width = rect.width + 'px';
            fake.style.height = rect.height + 'px';
            fake.style.display = "block";
            onScroll();
        }
        //Listener
        window.addEventListener('scroll', onScroll);
        window.addEventListener('resize', onResize);
    }

    for ( let i = 0; i < elements.length; i++){
        makeSticky(elements[i]);
    }
})()

//Generate fize links categories
    const div = document.getElementById('links');
    let colors = ['#222','#000','#444','#ff5120', 'green'];
    let weight = ['700','500','400','300','200'];
    /*Minimum & Maximum font Size*/
    let minFontSize = 10;
    let maxFontSize = 30;
    let sizes = div.getElementsByTagName('a');

    const randomNumberGenerator = function (min,max){
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1) + min) ;
    }

for (let i = 0; i < sizes.length; i++) {
    let size = sizes[i]
    size.style.fontSize = randomNumberGenerator(minFontSize, maxFontSize) + 'px'
    size.style.color = colors[Math.floor(Math.random() * colors.length)]
    size.style.fontWeight = weight[Math.floor(Math.random() * weight.length)]
}
