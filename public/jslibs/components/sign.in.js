let signModeSelector;
let signModeChoices;
let signFormValidator;

function initSignForm() {
    signModeSelector = document.querySelector('.sign-form-element.auth-type');
    signModeChoices = new Choices(signModeSelector, {
        itemSelectText: '',
        searchEnabled: false,
        shouldSort: false
    });

    signModeSelector.addEventListener('change', () => {
        let mode = signModeChoices.getValue().value;

        signFormValidator.destroy();
        initSignFormValidator('#sign-form');

        if (mode === 'login') {
            document.body.querySelector('.label-password').classList.remove('collapsed');
            document.body.querySelector('#password').classList.remove('collapsed');

            appendPasswordField();
        } else {
            document.body.querySelector('.label-password').classList.add('collapsed');
            document.body.querySelector('#password').classList.add('collapsed');
        }
    }, false);

    initSignFormValidator('#sign-form');
}

function initSignFormValidator(fm) {
    document.body.querySelector('#email').style.marginBottom = '40px';
    signFormValidator = new window.JustValidate(fm, {
        errorLabelStyle: { color: 'var(--form-error-clr)' },
        focusInvalidField: true,
    });

    signFormValidator.addField('#email',
        [
            {
                rule: 'required',
                errorMessage: 'Вы не ввели e-mail',
            },
            {
                rule: 'email',
                errorMessage: 'Неверный формат e-mail',
            },
        ],
        {
            errorsContainer: document.body.querySelector('.label-email')
        });
}

function appendPasswordField() {
    document.body.querySelector('#email').style.marginBottom = '16px';
    signFormValidator.addField('#password',
        [
            {
                rule: 'required',
                errorMessage: 'Вы не ввели пароль',
            },
        ],
        {
            errorsContainer: document.body.querySelector('.label-password')
        });
}

onload = initSignForm;
