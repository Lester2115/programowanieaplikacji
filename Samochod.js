
class Samochod
{
  constructor(marka,model,cena,rocznik,spalanie)
  {
    //tworzymy właściwości klasy
    this.marka=marka;
    this.model=model;
    this.cena=cena;
    this.rocznik=rocznik;
    this.spalanie=spalanie;
  }
  wiek(){
    const data = new Date();
    const rok=data.getFullYear(); //pobieramy aktualny rok
    return rok-this.rocznik;
  }
  koszt()
  {
    let paliwo=5.80;
    return this.spalenie * paliwo;
  }
}
