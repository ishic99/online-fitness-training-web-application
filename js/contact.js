function checkEmail(theForm) {
    if (theForm.EMAIL_1.value != theForm.EMAIL_2.value)
    {
        alert('Those emails don\'t match!');
        return false;
    } else {
        alert('Those emails  matched!');
        
    }
}