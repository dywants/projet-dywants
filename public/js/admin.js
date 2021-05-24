//toggle menu avatar
try{
    let btnShowMenuAvatar = document.getElementById('account');
    let iconMenuAvatar = document.getElementById('ico-account');
    let menuAvatar = document.getElementById('topbar-menu');
    btnShowMenuAvatar.addEventListener('click', function () {
        menuAvatar.classList.toggle('hide');
        menuAvatar.classList.toggle('show');
        iconMenuAvatar.classList.toggle('fa-chevron-down');
        iconMenuAvatar.classList.toggle('fa-chevron-up');
    });
}catch (e) {
    console.log(e);
}
//ClasicEditor
try{
    ClassicEditor.create( document.querySelector( '#editor' ), {
        toolbar: [ 'heading',
            '|',
            'bold',
            'italic',
            'link',
            'bulletedList',
            'numberedList',
            'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
        .catch( error => {
            console.log( error );
        } );
}catch (e) {
    console.log(e);
}

//custom fenetre confirm
try{
    const Confirm = {
        open (options) {
            options = Object.assign({}, {
                title: '',
                message: '',
                okText: 'OK',
                cancelText: 'Cancel',
                onok: function () {},
                oncancel: function () {}
            }, options);

            const html = `
            <div class="confirm">
                <div class="confirm__window">
                    <div class="confirm__titlebar">
                        <span class="confirm__title">${options.title}</span>
                        <button class="confirm__close">&times;</button>
                    </div>
                    <div class="confirm__content">${options.message}</div>
                    <div class="confirm__buttons">
                        <button class="btn edit confirm__button--ok confirm__button--fill">${options.okText}</button>
                        <button class="btn confirm__button--cancel">${options.cancelText}</button>
                    </div>
                </div>
            </div>
        `;

            const template = document.createElement('template');
            template.innerHTML = html;

            // Elements
            const confirmEl = template.content.querySelector('.confirm');
            const btnClose = template.content.querySelector('.confirm__close');
            const btnOk = template.content.querySelector('.confirm__button--ok');
            const btnCancel = template.content.querySelector('.confirm__button--cancel');

            confirmEl.addEventListener('click', e => {
                if (e.target === confirmEl) {
                    options.oncancel();
                    this._close(confirmEl);
                }
            });

            btnOk.addEventListener('click', () => {
                options.onok();
                this._close(confirmEl);
            });

            [btnCancel, btnClose].forEach(el => {
                el.addEventListener('click', () => {
                    options.oncancel();
                    this._close(confirmEl);
                });
            });

            document.body.appendChild(template.content);
        },

        _close (confirmEl) {
            confirmEl.classList.add('confirm--close');

            confirmEl.addEventListener('animationend', () => {
                document.body.removeChild(confirmEl);
            });
        }
    };
    let elements = document.querySelectorAll('.btnChangeBg');
    for (let i = 0; i < elements.length; i++){
        let element = elements[i];
        element.addEventListener('click', () => {
            Confirm.open({
                title: 'Suppresson contenu',
                message: 'Etes-vous sur de vouloir supprimer ce contenu?',
                onok: () => {
                    document.body.style.backgroundColor = 'blue';
                }
            })
        });
    }
}catch (e) {
    console.log(e);
}

