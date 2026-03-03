word = input("Enter a word: ")
has_vowel = 0


for letter in word:
    if letter.lower() in "aeiou":
        has_vowel += 1
print(f"A palavra {word} possui {has_vowel} vogal(s)")