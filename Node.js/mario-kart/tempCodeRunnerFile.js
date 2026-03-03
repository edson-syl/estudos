const prompt = require("prompt-sync")()
const DISTANCIA_FINAL = 100
let rankingFinal = []

/*Players*/
class Characters {
    constructor(nome, velocidadeBase) {
        this.nome = nome
        this.velocidadeBase = velocidadeBase
        this.distancia = 0
        this.terminou = false
    }

    avanco() {
        let variacao = Math.floor(Math.random() * 6)
        let avancou = this.velocidadeBase + variacao
        this.distancia += this.velocidadeBase + variacao
        console.log(`${this.nome} avançou ${avancou.toFixed(2)} metros (Boost: ${variacao}) \nDistância total: ${this.distancia.toFixed(2)}m`)
    }
    
    
}
const mario = new Characters("Mario", 7.6)
const yoshi = new Characters("Yoshi", 7.5)
const bowser = new Characters("Bowser", 7.9)
const princesapeach = new Characters("Princesa Peach", 7.8)

const corredores = [mario, yoshi, bowser, princesapeach]

/*Turno*/
function turno(players) {
    for (let i = 0; i < players.length; i++) {

        if (!players[i].terminou) {
            players[i].avanco()

            if (players[i].distancia >= DISTANCIA_FINAL) {
                switch(rankingFinal.length) {
                    case 0:
                        console.log(`\n🏁 ${players[i].nome} cruzou a linha de chegada!\n🥇 Posição: 1º lugar\n`)
                        break;
                    case 1:
                        console.log(`\n🏁 ${players[i].nome} cruzou a linha de chegada!\n🥈 Posição: 2º lugar\n`)
                        break;
                    case 2:
                        console.log(`\n🏁 ${players[i].nome} cruzou a linha de chegada!\n🥉 Posição: 3º lugar\n`)
                        break;
                    case 3:
                        console.log(`\n🏁 ${players[i].nome} cruzou a linha de chegada!\n💠 Posição: 4º lugar\n`)
                        break;
                }
                
                
                players[i].terminou = true
                rankingFinal.push(players[i])
            }
        }

    }
}

/*Inicio*/
console.log(`====================================
    🏁 SIMULADOR DE CORRIDA 🏁
====================================
Corredores:
- Mario (Velocidade Base: 7.6)
- Yoshi (Velocidade Base: 7.5)
- Bowser (Velocidade Base: 7.9)
- Princesa Peach (Velocidade Base: 7.8)

Distância total: 1000 metros`
)
player = prompt("Escolha seu personagem: ")
console.log("🔥 A corrida vai começar!")

/*Corrida*/
let valor_turno = 1
const corrida = setInterval(() => {
    console.log(`\n====================================
              TURNO ${valor_turno} 🎲
====================================
        \n`)
    turno(corredores)
    valor_turno += 1
    if (rankingFinal.length == corredores.length) {
        clearInterval(corrida)
        console.log(`====================================
🏆 RESULTADO FINAL 🏆
====================================

🥇 1º - ${rankingFinal[0].nome}
🥈 2º - ${rankingFinal[1].nome}
🥉 3º - ${rankingFinal[2].nome}
💠 4º - ${rankingFinal[3].nome}`)
    }
}, 2000)

