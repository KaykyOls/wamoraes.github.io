<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - W.A Moraes</title>
    <link rel="icon" type="image/x-icon" href="Imagens/W_AMORAESLOGO.png">
    <link rel="stylesheet" href="ccsssss.css">
</head>
<body>

    <!-- CABEÇALHO -->
    <header>
        <div class="header-topo">
            <a href="index.html" class="logo">
                <img src="Imagens/W_AMORAESLOGO.png" alt="W.A Moraes Peças e Acessórios Automotivos" class="logo-icone">
                <div class="logo-texto">
                    <span>W.A Moraes</span>
                    <small>Peças e Acessórios Automotivos</small>
                </div>
            </a>
        </div>
    </header>

    <!-- MENU DE NAVEGAÇÃO -->
    <nav>
        <ul>
            <li><a href="index.html">Início</a></li>
            <li><a href="sobre.html">Sobre</a></li>
            <li><a href="produtos.php" class="ativo">Produtos</a></li>
            <li><a href="novidades.html">Novidades</a></li>
            <li><a href="contato.html">Contato</a></li>
        </ul>
    </nav>

    <!-- CONTEÚDO PRINCIPAL -->
    <main>

        <section>
            <h1 class="titulo-secao">Nossos Produtos</h1>

            <?php

            // Array com os produtos da loja
            $produtos = [
                [
                    "nome"      => "Pastilha de Freio",
                    "descricao" => "Pastilha de freio de alta durabilidade para veículos de passeio. Proporciona frenagem segura e suave, com baixo nível de ruído.",
                    "preco"     => "R$ 89,90",
                    "imagem" => "Imagens/Pastilha_de_Freio.webp"
                ],
                [
                    "nome"      => "Óleo de Motor 5W30",
                    "descricao" => "Óleo sintético de alta performance para motores a gasolina e flex. Protege o motor e melhora o desempenho do veículo.",
                    "preco"     => "R$ 42,50",
                    "imagem" => "Imagens/Oleo_de_Motor_5W30.png"
                ],
                [
                    "nome"      => "Bateria Automotiva 60Ah",
                    "descricao" => "Bateria de alta potência com garantia de 18 meses. Compatível com a maioria dos veículos nacionais e importados.",
                    "preco"     => "R$ 389,00",
                    "imagem" => "Imagens/Bateria_Automotiva_60Ah.png"
                ],
                [
                    "nome"      => "Filtro de Ar",
                    "descricao" => "Filtro de ar de qualidade superior que garante a entrada de ar limpo no motor, melhorando o desempenho e reduzindo o consumo de combustível.",
                    "preco"     => "R$ 35,00",
                    "imagem" => "Imagens/Filtro_de_Ar.png"
                ],
                [
                    "nome"      => "Palheta do Limpador",
                    "descricao" => "Kit com duas palhetas de borracha de alta resistência. Proporcionam limpeza eficiente do para-brisa em qualquer condição climática.",
                    "preco"     => "R$ 55,00",
                    "imagem" => "Imagens/Palheta_do_Limpador.webp"
                ],
                [
                    "nome"      => "Lâmpada Automotiva H4",
                    "descricao" => "Lâmpada halógena H4 para faróis de veículos. Luz branca de alta luminosidade que aumenta a visibilidade durante a noite.",
                    "preco"     => "R$ 28,90",
                    "imagem" => "Imagens/Lampada_Automotiva_H4.png"
                ],
                [
                    "nome"      => "Filtro de Combustível",
                    "descricao" => "Filtro de combustível que retém impurezas e protege o sistema de injeção do veículo. Recomendado para troca a cada 15.000 km.",
                    "preco"     => "R$ 48,00",
                    "imagem" => "Imagens/filtro_de_combustivel.png"
                ],
                [
                    "nome"      => "Correia Dentada",
                    "descricao" => "Correia dentada de alta resistência para distribuição do motor. Compatível com os principais modelos nacionais. Peça fundamental para a segurança do motor.",
                    "preco"     => "R$ 130,00",
                    "imagem" => "Imagens/Correia_Dentada.png"
                ]
            ];

            // Exibindo os produtos em cartões usando foreach
            echo '<div class="produtos-grid">';

            foreach ($produtos as $produto) {
                echo '<article class="card-produto">';
                echo '    <div class="card-produto-img-placeholder">';
                echo '        <img src="' . $produto["imagem"] . '" alt="' . $produto["nome"] . '" class="produto-img">';
                echo '    </div>';
                echo '    <div class="card-produto-info">';
                echo '        <h3>' . $produto["nome"] . '</h3>';
                echo '        <p>' . $produto["descricao"] . '</p>';
                echo '        <p class="preco-produto">' . $produto["preco"] . '</p>';
                echo '    </div>';
                echo '</article>';
            }

            echo '</div>';

            ?>

        </section>

    </main>

    <!-- RODAPÉ -->
    <footer>
        <div class="footer-conteudo">

            <div class="footer-bloco">
                <h4>W.A Moraes</h4>
                <p>Peças e Acessórios Automotivos</p>
                <p>Qualidade e confiança para o seu veículo.</p>
            </div>

            <div class="footer-bloco">
                <h4>Endereço</h4>
                <address>
                     Rua São João Batista, 473<br>
                    Centro, São João de Meriti/RJ<br>
                    CEP: 25515-520
                </address>
            </div>

            <div class="footer-bloco">
                <h4>Contato</h4>
                <p>📞 (21) 2756-4682 </p>
                <p>📞 (21) 2756-6714 </p>
                <p>✉️ contato@wamoraes.com.br</p>
            </div>

        </div>

        <p class="footer-copy">© 2026 W.A Moraes Peças e Acessórios Automotivos — Todos os direitos reservados.</p>
    </footer>

</body>
</html>