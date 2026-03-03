time_a = {"João", "Pedro", "Lucas", "Mateus"}
time_b = {"Lucas", "Carlos", "Mateus", "Rafael"}

print(f"Jogadores que estao nos dois times: {time_a.intersection(time_b)}")
print(f"Jogadores que estao apenas no time a: {time_a.difference(time_b)}")
print(f"Jogadores que estao em apenas um dos times: {time_a.difference(time_b), time_b.difference(time_a)}")
print(f"Todos os jogadores: {time_a.union(time_b)}")