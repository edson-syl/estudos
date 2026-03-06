import qrcode from "qrcode-terminal"
import PromptSync from "prompt-sync"
const prompt = PromptSync()

console.log("GERADOR DE QR-CODE")

console.log("Digite o link:")
const link = prompt("> ")

console.log("Generando QR Code...")
setTimeout(() => {
    qrcode.generate(link, {small: true})
}, 2000);
