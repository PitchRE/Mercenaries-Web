@extends('layout.app') @section('content')

<div class="container-fluid has-background-warning" style="min-height: 100vh;">
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-centered">
                    Character name
                </h1>
                <div class="columns">
                    <div class="column is-2 "></div>
                    <div class="column is-2"></div>
                    <div class="column is-2 ">
                        <p class="has-text-right">Level: 5</p>
                        <p class="has-text-right">Experience: 50</p>
                        <p class="has-text-right">Next level at: 250</p>
                    </div>
                    <div class="column is-2"></div>
                    <div class="column is-2"></div>
                    <div class="column is-2"></div>
                </div>

            </div>
        </div>
    </section>

    <div class="container">

        <h1 class="subtitle has-text-centered" style="font-size: 1rem;"> Skills</h1>
        <div class="columns">
            <div class="column is-2"></div>
            <div class="column is-2"></div>
            <div class="column is-2">Ironflesh</div>
            <div class="column is-2">
                <span id="Ironflesh">0</span>
                <span id="IronfleshPlus" onclick="add('Ironflesh')" class="fas fa-plus GreenPlus"></>
            </div>
            <div class="column is-2"></div>
            <div class="column is-2"></div>
        </div>
        <div class="columns">
            <div class="column is-2"></div>
            <div class="column is-2"></div>
            <div class="column is-2">Shooting from Horseback</div>
            <div class="column is-2">
                <span id="Shooting_from_Horseback">0 </span><span id="Shooting_from_HorsebackPlus"
                    onclick="add('Shooting_from_Horseback')" class="fas fa-plus GreenPlus"></span>
            </div>
            <div class="column is-2"></div>
            <div class="column is-2"></div>
        </div>
        <div class="columns">
            <div class="column is-2"></div>
            <div class="column is-2"></div>
            <div class="column is-2">Power Strike</div>
            <div class="column is-2">
                <span id="Power_Strike">0 </span><span id="Power_StrikePlus" onclick="add('Power_Strike')"
                    class="fas fa-plus GreenPlus"></span>
            </div>
            <div class="column is-2">One Handed Weapons</div>
            <div class="column is-2">
                <span id="One_Handed_Weapons">0 </span><span id="One_Handed_WeaponsPlus"
                    onclick="add('One_Handed_Weapons')" class="fas fa-plus GreenPlus"></span>
            </div>
        </div>
        <div class="columns">
            <div class="column is-2"></div>
            <div class="column is-2"></div>
            <div class="column is-2">Grenade Throwing</div>
            <div class="column is-2">
                <span id="Grenade_Throwing">0 </span><span id="Grenade_ThrowingPlus" onclick="add('Grenade_Throwing')"
                    class="fas fa-plus GreenPlus"></span>
            </div>
            <div class="column is-2">Two Handed Weapons</div>
            <div class="column is-2">
                <span id="Two_Handed_Weapons">0 </span><span id="Two_Handed_WeaponsPlus"
                    onclick="add('Two_Handed_Weapons')" class="fas fa-plus GreenPlus"></span>
            </div>
        </div>
        <div class="columns">
            <div class="column is-2"></div>
            <div class="column is-2"></div>
            <div class="column is-2">Power Draw</div>
            <div class="column is-2">
                <span id="Power_Draw">0 </span><span id="Power_DrawPlus" onclick="add('Power_Draw')"
                    class="fas fa-plus GreenPlus"></span>
            </div>
            <div class="column is-2">Polearms</div>
            <div class="column is-2">
                <span id="Polearms">0 </span><span id="PolearmsPlus" onclick="add('Polearms')"
                    class="fas fa-plus GreenPlus"></span>
            </div>
        </div>
        <div class="columns">
            <div class="column is-2"></div>
            <div class="column is-2"></div>
            <div class="column is-2">Shield</div>
            <div class="column is-2">
                <span id="Shield">0 </span><span id="ShieldPlus" onclick="add('Shield')"
                    class="fas fa-plus GreenPlus"></span>
            </div>
            <div class="column is-2">Archery</div>
            <div class="column is-2">
                <span id="Archery">0 </span><span id="ArcheryPlus" onclick="add('Archery')"
                    class="fas fa-plus GreenPlus"></span>
            </div>
        </div>
        <div class="columns skillnames">
            <div class="column is-2">STR</div>
            <div class="column is-2">
                <span id="STR">0 </span><span id="STRPlus" onclick="add('STR')" class="fas fa-plus GreenPlus"></span>
            </div>
            <div class="column is-2">Athletics</div>
            <div class="column is-2">
                <span id="Athletics">0 </span><span id="AthleticsPlus" onclick="add('Athletics')"
                    class="fas fa-plus GreenPlus"></span>
            </div>
            <div class="column is-2">Firearms</div>
            <div class="column is-2">
                <span id="Firearms">0 </span><span id="FirearmsPlus" onclick="add('Firearms')"
                    class="fas fa-plus GreenPlus"></span>
            </div>
        </div>
        <div class="columns skillnames">
            <div class="column is-2">AGI</div>
            <div class="column is-2">
                <span id="AGI">0 </span><span id="AGIPlus" onclick="add('AGI')" class="fas fa-plus GreenPlus"></span>
            </div>
            <div class="column is-2">Riding</div>
            <div class="column is-2">
                <span id="Riding">0 </span><span id="RidingPlus" onclick="add('Riding')"
                    class="fas fa-plus GreenPlus"></span>
            </div>
            <div class="column is-2">Throwing</div>
            <div class="column is-2">
                <span id="Throwing">0</span>
                <span id="ThrowingPlus" onclick="add('Throwing')" class="fas fa-plus GreenPlus"></span>
            </div>
        </div>
        <div class="columns freepoints">
            <div class="column is-2 FreeAtributes">Atribute points:</div>
            <div class="column is-2">
                <span id="atributesSpan" class="FreeAtributes">0</span>
            </div>
            <div class="column is-2 FreeSkills">Skill points:</div>
            <div class="column is-2 ">
                <span id="skillsSpan" class="FreeSkills">0</span>
            </div>
            <div class="column is-2 FreeProfi">Weapon points:</div>
            <div class="column is-2">
                <span id="profiSpan" class="FreeProfi">0</span>
            </div>
        </div>

        <div class="columns">
            <div class="column is-2 "></div>
            <div class="column is-2"></div>
            <div class="column is-2 "></div>
            <div class="column is-2 "></div>
            <div class="column is-2"></div>
            <div class="column is-2">
                <form action="{{route('post_stats')}}" method="POST">
                    @csrf
                    <input type="hidden" name="data" id="data_form">
                    <input type="submit" class="button is-danger is-rounded" value="Save">
                </form>
            </div>
        </div>
    </div>
</div>
<style></style>
<script>
    var Profi = [
        "Throwing",
        "Firearms",
        "Archery",
        "Polearms",
        "Two_Handed_Weapons",
        "One_Handed_Weapons"
    ];
    var Atributes = ["STR", "AGI"];
    var Skills = [
        "Ironflesh",
        "Shooting_from_Horseback",
        "Power_Strike",
        "Grenade_Throwing",
        "Power_Draw",
        "Shield",
        "Athletics",
        "Riding"
    ];
    var data = {}
    var FreeAtributes = 5;
    var FreeSkills = 5;
    var FreeProfi = 5;
    UpdateCounters();
    function add(element) {
        obj = document.getElementById(element);
        value = obj.textContent;
        if (Profi.includes(element)) {
            if (FreeProfi > 0) {
                obj.textContent = parseInt(value) + 1;
                FreeProfi -= 1;
            }

            if (FreeProfi == 0) {
                Profi.forEach(element => {
                    document.getElementById(element + "Plus").style.visibility =
                        "hidden";
                });
            }
        } else if (Atributes.includes(element)) {
            if (FreeAtributes > 0) {
                obj.textContent = parseInt(value) + 1;
                FreeAtributes -= 1;
            }
            if (FreeAtributes == 0) {
                Atributes.forEach(element => {
                    document.getElementById(element + "Plus").style.visibility =
                        "hidden";
                });
            }
        } else if (Skills.includes(element)) {
            if (FreeSkills > 0) {
                obj.textContent = parseInt(value) + 1;
                FreeSkills -= 1;
            }
            if (FreeSkills == 0) {
                Skills.forEach(element => {
                    document.getElementById(element + "Plus").style.visibility =
                        "hidden";
                });
            }
        } else {
            UpdateCounters();
            console.log(element);
        }
        UpdateCounters();
    }
    function UpdateCounters() {
        document.getElementById("atributesSpan").textContent = FreeAtributes;
        document.getElementById("profiSpan").textContent = FreeProfi;
        document.getElementById("skillsSpan").textContent = FreeSkills;

        if (FreeAtributes == 0 || FreeAtributes < 0) {
            var items = document.getElementsByClassName("FreeAtributes");
            items[0].style.visibility = "hidden";
            items[1].style.visibility = "hidden";
        }
        if (FreeSkills == 0 || FreeSkills < 0) {
            var items = document.getElementsByClassName("FreeSkills");
            items[0].style.visibility = "hidden";
            items[1].style.visibility = "hidden";
        }
        if (FreeProfi == 0 || FreeProfi < 0) {
            var items = document.getElementsByClassName("FreeProfi");
            items[0].style.visibility = "hidden";
            items[1].style.visibility = "hidden";
            
        }
        PrepareData()
    }



 

     function PrepareData()
    {
     
        Profi.forEach(element => {
   
            var value =  document.getElementById(element).textContent
         
            data[element] = value;
        })
        Skills.forEach(element => {
            var value =  document.getElementById(element).textContent
            data[element] = value;
        })
        Atributes.forEach(element => {
            var value =  document.getElementById(element).textContent
            data[element] = value;
        })
        var myJSON = JSON.stringify(data);
        console.log(myJSON)
        document.getElementById("data_form").value = myJSON;
        console.log( document.getElementById("data_form").value)
       
   
    }
    
</script>