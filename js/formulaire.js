    const { createClient } = supabase
    supabase = createClient('https://dabyrmtavvsmedddoglv.supabase.co', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQyNzc3MDQ0LCJleHAiOjE5NTgzNTMwNDR9.KX6Nz5CV9crNAhlFsEVLpyfNAFQdFbMcxT6hXSyarJw');
   
    console.log(supabase)

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
        //submission["id"] = 1;

       
        const {error, data} = await supabase.from('entries').insert([submission])
        console.log(submission);
        if (error){
            console.log(error);
            alert ('Il y a une erreur, essayez à nouveau')
        }else{
            alert ('Merci de nous avoir contacté')
            console.log(this.href)
            //window.location = this.href;
        }



    })