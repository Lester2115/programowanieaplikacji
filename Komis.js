class Komis
{
    constructor(nazwa)
    {
        this.nazwa=nazwa;
    }

    samochody=[];

    dodajSamochod(auto)
    {
     this.samochody.push(auto);
    }
    usunSamochod()
    {

    }

    wyswietlSamochody()
    {
    //  this.samochody.forEach((samochod) =>{
    //      console.log(samochod.marka);
    //      console.log(samochod.model);
    //      console.log(samochod.cena);
    //  });

    return `
    ${this.samochody.map(s => `Marka: ${s.marka}  Model:  ${s.model}  Rocznik: ${s.rocznik}`).join(' ')}
    `;
    }
}