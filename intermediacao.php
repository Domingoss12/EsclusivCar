<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esclusiv Car</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>

    <!-- Navegador entre páginas -->
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="index.php" class="flex items-center">
                <img src="img/log.png" class="h-16" alt="Esclusiv Car Logo" />
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="index.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
                    </li>
                    <li>
                        <a href="automóveis.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Automóveis</a></a>
                    </li>
                    <li>
                        <a href="quemsomos.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Quem
                            somos</a>
                    </li>
                    <li>
                        <a href="intermediacao.php" class="block py-2 px-3 text-white bg-red-700 rounded md:bg-transparent md:text-red-700 md:p-0 dark:text-white md:dark:text-red-500" aria-current="page">Intermediação</a>
                    </li>
                    <li>
                        <a href="contactos.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contactos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteudo -->
    <div class="px-5 max-w-screen-2xl mx-auto pt-7">
        <div class="grid lg:grid-cols-2 mt-5 space-y-5 p-5">
            <!-- Informação -->
            <div class="">
                <h1 class="text-4xl font-bold">INTERMEDIAÇÃO</h1>

                <h2 class="mb-2 text-lg font-semibold">Documentos necessários para
                    financiamento a particulares, por cada titular, conjugue e fiadores (se exigido):</h2>
                <ul class="max-w-2xl space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                    <li>
                        Cópia de cartão de cidadão;
                    </li>
                    <li>
                        IBAN pessoal;
                    </li>
                    <li>
                        Comprovativo de morada (factura de luz ou água ou telecomunicações);
                    </li>
                    <li>
                        Cópia dos 3 últimos recibos de vencimento;
                    </li>
                    <li>
                        Contacto telefónico;
                    </li>
                    <li>
                        Último Modelo 3 de IRS entregue ou código de validação;
                    </li>
                </ul>

                <h2 class="mb-2 text-lg font-semibold mt-4">Documentos necessários para
                    financiamento a Empresas:</h2>
                <ul class="max-w-2xl space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                    <li>
                        IBAN da empresa;
                    </li>
                    <li>
                        Comprovativo de morada (factura de luz ou água ou telecomunicações);
                    </li>
                    <li>
                        Código Certidão Permanente;
                    </li>
                    <li>
                        Último Mod.22;
                    </li>
                    <li>
                        Última IES;
                    </li>
                    <li>
                        Último Balancete Geral;
                    </li>
                    <li>
                        Contacto Telefónico;
                    </li>
                    <li>
                        Documentos individuais dos sócios (como para financiamento a particulares)
                    </li>
                </ul>

                <h2 class="mb-2 text-lg font-semibold mt-4">Informação Relativa à Atividade de Intermediário de Crédito
                </h2>
                <ul class="max-w-2xl space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                    <li>
                        J.S.ANDRADE-COMÉRCIO DE AUTOMÓVEIS, UNIPESSOAL Lda, com Sede: ESTRADA MUNICIPAL 510 Nº25
                        2835-490 STº ANTÓNIO DA CHARNECA , INTERMEDIÁRIO DE CRÉDITO A TITULO ACESSÓRIO
                    </li>
                    <li>
                        Intermediário de Crédito a Titulo Acessório com o Nº de Registo 0000880
                    </li>
                    <li>
                        Telefone: 21080 80 00 - Email: geral@exclusivcar.pt
                    </li>
                    <li>
                        Registo disponível para consulta no portal do cliente bancário em
                    </li>
                    <li>
                        https://www.bportugal.pt/intermediariocreditofar/j-s-andrade-comercio-de-automoveis-unipessoal-lda
                    </li>
                </ul>

                <h2 class="mb-2 text-lg font-semibold mt-4">Mutuantes com quem mantêm Contrato De Vinculação:
                </h2>
                <ul class="max-w-2xl space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                    <li>
                        321 CRÉDITO INSTITUIÇÃO FINANCEIRA DE CRÉDITO, SA
                    </li>
                    <li>
                        COFIDIS , SUCURSAL EM PORTUGAL
                    </li>
                    <li>
                        BANCO CREDIBOM
                    </li>
                    <li>
                        BANCO BBVA CONSUMER
                    </li>
                    <li>
                        O Intermediário De Crédito não exerce a atividade em regime de exclusividade relativamente a
                        qualquer mutuante;
                    </li>
                </ul>

                <h2 class="mb-2 text-lg font-semibold mt-4">Serviços de Intermediação De Crédito:
                </h2>
                <ul class="max-w-2xl space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                    <li>
                        Apresentação ou Proposta de Contratos de Crédito a Consumidores;
                    </li>
                    <li>
                        O Intermediário de Crédito não presta serviços de consultoria.
                    </li>
                    <li>
                        Contrato de seguro de responsabilidade civil profissional celebrado com a “LUSO ATLÂNTICA ” –
                        Apólice Nº 2511652 - Válido até 20/09/2023;
                    </li>
                    <li>
                        O Intermediário de Crédito não pode receber ou entregar quaisquer valores relacionados com a
                        formação, a execução e o cumprimento antecipado dos contratos de crédito, nos Termos Do Artigo
                        46º Do Decreto-Lei 81-C/2017.
                    </li>
                    <li>
                        A atividade de Intermediário de Crédito da está sujeita á supervisão do Banco de Portugal.
                    </li>
                </ul>
            </div>

            <div>


                <form class="max-w-md mx-auto">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                        <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">O
                            seu nome</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                        <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">O
                            seu Email</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="number" name="valorPertendido" id="valorPertendido" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                        <label for="valorPertendido" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Valor
                            Pertendido</label>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="tel" pattern="[0-9]{9}" name="telemovel" id="telemovel" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                            <label for="telemovel" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">O
                                seu Telefone</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="number" name="AnoViatura" id="AnoViatura" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                            <label for="AnoViatura" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Ano
                                da viatura</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="number" name="Mensalidade" id="Mensalidade" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                            <label for="Mensalidade" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nº
                                Mensalidade</label>
                        </div>
                    </div>

                    <label for="message" class="block mb-2 text-sm font-medium">A tua mensagem</label>

                    <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-red-500 focus:border-red-500   dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" placeholder="Mensagem..."></textarea>

                    <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none mt-5 focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Enviar</button>
                </form>

            </div>
        </div>

        <footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="index.php" class="hover:underline">ExclusivCar</a>. All Rights Reserved.
                </span>
            </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html>