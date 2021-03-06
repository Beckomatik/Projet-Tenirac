    const { createClient } = supabase
    supabase = createClient('https://dabyrmtavvsmedddoglv.supabase.co', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQyNzc3MDQ0LCJleHAiOjE5NTgzNTMwNDR9.KX6Nz5CV9crNAhlFsEVLpyfNAFQdFbMcxT6hXSyarJw');

    const form = document.querySelector('#contact-form')
    form.addEventListener('submit', async (event) => {

        event.preventDefault()

        const formInputs = form.querySelectorAll('input, textarea')

        let submission = {}
        formInputs.forEach(element => {
            const {value, name} = element
            if(value && name != "objet" && name != "") {
                submission[name] = value
            }
        })
       
        const {error} = await supabase.from('entries').insert([submission], {returning: 'minimal'})
        if (error){
            alert ('Il y a une erreur, essayez à nouveau')
        }else{
            alert ('Merci de nous avoir contacté')
        }
    })