const terms = document.getElementById('terms');
const submit = document.getElementById('submit');

terms.addEventListener('chage', (e)=>
{
    submit.disabled = !e.currentTarget.checked;
})
function cheackEmail(){
    let email = document.querySelector('#emailField').value;
    if(!email.includes('@')) {
        alert('Нет символа @');
    }else if(!email.includes('.')){
        alert('Нет сивола .')
    }else{
        alert('Все отлично')
    }

}
