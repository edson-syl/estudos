def registrar_evento(nome_evento, *participantes, **detalhes):
    print(f"Evento: {nome_evento}\nParticipantes: {participantes}\nDetalhes: {detalhes}")


evento01 = registrar_evento("Show de Eli Soares", "Edson", "Widson", 
                            local="Abreu e Lima",
                            data="20/09/25",
                            entrada="Gratuito")