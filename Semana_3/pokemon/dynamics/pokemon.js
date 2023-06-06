class moves 
{
    constructor(nombre, tipom, categoria, probabilidad, potencia)
    {
        
        this.nombre=nombre;
        this.tipom=tipom;
        this.categoria= categoria
        this.prob=probabilidad;
        this.potencia=potencia;
    }
}


class tipos
{
    constructor(principal,secundario)
    {
        this.principal=principal;
        this.secundario=secundario;
    }
}


class pokemon extends tipos
{
    constructor(nombre, principal, secundario, vida,atk,def,defesp,atkesp, velocidad, m1, m2, m3, m4)
    {
        super (principal,secundario);
        this.nombre=nombre;
        this.vida=vida;
        this.ataque=atk;
        this.defensa=def;
        this.defensaespecial=defesp;
        this.ataquespecial=atkesp;
        this.velocidad=velocidad;
        this.m1= m1;
        this.m2= m2;
        this.m3= m3;
        this.m4= m4;
    }
}


class entrenador
{
    constructor(nombre,region, medallas, pk1, pk2, pk3, pk4, pk5, pk6)
    {
        this.nombre=nombre;
        this.region=region;
        this.medallas=medallas;
        this.pk1 = pk1;
        this.pk2 = pk2;
        this.pk3 = pk3;
        this.pk4 = pk4;
        this.pk5 = pk5;
        this.pk6 = pk6;
    }
}

// class movimientos extends moves
// {
//      constructor(m1,m2,m3,m4);
// }



//========= MOVIMIENTOS =========//
let body_Slam = new moves ("Body Slam", "Normal", "Físico", 85, "100%");
let aura_Sphere = new moves ("Aura Sphere", "Lucha", "Especial", 80, "--%");
let dark_Pulse = new moves ("Dark Pulse", "Oscuro", "Especial", 80, "100%");
let close_Combat = new moves ("Close Combat", "Lucha", "Físico", 120, "100%");
let crunch = new moves ("Crunch", "Oscuro", "Físico", 80, "100%");
let sludge_Bomb = new moves ("Sludge Bomb", "Veneno", "Especial", 90, "100%");
let toxic = new moves ("Toxic", "Veneno", "Estatus", "-", "90%");
let fire_Punch = new moves ("Fire Punch", "Fuego", "Físico", 75, "100%");
let hyper_Voice = new moves ("Hyper Voice", "Normal", "Especial", 90, "100%");
let future_Sight = new moves ("Future Sight", "Psiquico", "Especial", 120, "100%");
let boomburst = new moves ("Boomburst", "Normal", "Especial", 140, "100%");
let overdrive = new moves ("Overdrive", "Electrico", "Especial", 80, "100%");
let gunk_shot = new moves ("Gunk Shot", "Veneno", "Físico", 120, "80%");
let earthquake = new moves ("Earthquake", "Suelo", "Físico", 100, "100%");
let brave_Bird = new moves ("Brave Bird", "Volador", "Físico", 120, "100%");
let chilling_Water = new moves ("Chilling Water", "Agua", "Especial", 50, "100%");
let hurricane = new moves ("Hurricane", "Volador", "Físico", 110, "70%");
let protect = new moves ("Protect", "Normal", "Estatus", "-", "-%");
let avalanche= new moves ("Avalanche", "Hielo", "Físico", 60, "100%");
let surf= new moves ("Surf", "Agua", "Especial", 90, "100%");
let shadow_Ball= new moves ("Shadow Ball", "Fantasma", "Especial", 80, "100%");
let body_Press= new moves ("Body Press", "Lucha", "Físico", 80, "100%");
let substitute= new moves ("Substitute", "Normal", "Estatus", "-", "-%");
let leech_Life= new moves ("Leech Life", "Bicho", "Físico", 80, "100%");
let flamethrower= new moves ("Flamethrower", "Fuego", "Especial", 90, "100%");
let fiery_Dance= new moves ("Fiery Dance", "Fuego", "Especial", 80, "100%");




//========== POKEMONES ========== //
let lucario = new pokemon ("Lucario", "Fight", "Steel", 80, 140, 60, 78, 30, 120, body_Slam, aura_Sphere, close_Combat,body_Press);
let umbreon = new pokemon ("Umbreon", "Dark", "-", 75, 140, 40, 90, 80, 80, crunch, body_Slam, dark_Pulse, boomburst);
let gengar = new pokemon ("Gengar", "Ghost", "Poison", 92, 60, 100, 144, 32, 80, sludge_Bomb, shadow_Ball, toxic, gunk_shot);
let gardevoir = new pokemon ("Gardevoir", "Psychic", "Fairy", 100, 68, 30, 160, 40, 52, future_Sight, fire_Punch, fiery_Dance, shadow_Ball);
let toxtricity = new pokemon ("Toxtricity", "Electra", "Poison", 80, 60, 15, 150, 75, 128, overdrive, gunk_shot, fire_Punch, toxic);
let altaria = new pokemon ("Altaria", "Dragon", "Flying",80, 60, 43, 140, 70, 115, body_Slam, earthquake, brave_Bird, hurricane);

let pelipper = new pokemon ("Pelipper", "Water", "Flying", 160, 31, 136, 68, 144, 50, chilling_Water, protect, hurricane , brave_Bird);
let charizard = new pokemon ("Charizard", "Dragon", "Flying", 80, 60, 15, 150, 75, 128, body_Slam, earthquake, brave_Bird, hurricane);
let beartic = new pokemon ("Beartic", "Ice", "-", 184, 56, 144, 51, 124, 31, avalanche, surf, chilling_Water , boomburst);
let mimikyu = new pokemon ("Mimikyu", "Ghost", "Fairy", 70, 63, 128, 252, 70, 120, dark_Pulse, shadow_Ball, future_Sight, fire_Punch);
let ursaluna = new pokemon ("Ursaluna", "Ground", "Normal", 100, 122, 240, 31, 128, 140, body_Press, earthquake, substitute, flamethrower);
let volcarona = new pokemon ("Volcarona", "Bug", "Fire", 123, 60, 120, 144, 84, 160, fiery_Dance, leech_Life, flamethrower, fiery_Dance);




// ========= ENTRENADORES ========= //
let ash = new entrenador("Ash","Kanto", 8, lucario, umbreon, gengar, gardevoir, toxtricity, altaria);
let misty = new entrenador("Misty","Kanto", 8, pelipper, toxtricity, beartic, mimikyu, ursaluna, volcarona);




console.log("Ganó el entrenador Ash con los atributos:\n",ash, "\ny el pokemon Lucario:\n", lucario);
console.log("Y perdió la entrenadora Misty\n" ,misty, "\ncon el pokemon Pelipper:\n", pelipper)
