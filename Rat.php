<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Atendimento Técnico</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Relatório de Atendimento Técnico</h1>
        </header>

        <section class="form-section">
            <h2>Informações da Empresa Prestadora</h2>
            <div class="form-group">
                <label for="company-name">Nome:</label>
                <input type="text" id="company-name" placeholder="Empresa de Manutenção XYZ">
            </div>
            <div class="form-group-row">
                <div class="form-group">
                    <label for="cnpj">CNPJ:</label>
                    <input type="text" id="cnpj" placeholder="00.000.000/0001-00">
                </div>
                <div class="form-group">
                    <label for="service-date">Data do Atendimento:</label>
                    <input type="date" id="service-date">
                </div>
            </div>
        </section>

        <section class="form-section">
            <h2>Informações do Cliente</h2>
            <div class="form-group">
                <label for="client-name">Nome da Empresa:</label>
                <input type="text" id="client-name" placeholder="Cliente Público ABC">
            </div>
            <div class="form-group-row">
                <div class="form-group">
                    <label for="patrimonio-number">Número de Patrimônio:</label>
                    <input type="text" id="patrimonio-number" placeholder="12345">
                </div>
                <div class="form-group">
                    <label for="client-address">Endereço:</label>
                    <input type="text" id="client-address" placeholder="Rua Exemplo, 100, Centro">
                </div>
            </div>
        </section>

        <section class="form-section">
            <h2>Descrição do Equipamento</h2>
            <div class="form-group-row">
                <div class="form-group">
                    <label for="equipment-type">Tipo de Equipamento:</label>
                    <input type="text" id="equipment-type" placeholder="Computador, impressora, etc.">
                </div>
                <div class="form-group">
                    <label for="equipment-brand">Marca:</label>
                    <input type="text" id="equipment-brand" placeholder="Dell, HP, etc.">
                </div>
            </div>
            <div class="form-group-row">
                <div class="form-group">
                    <label for="equipment-model">Modelo:</label>
                    <input type="text" id="equipment-model" placeholder="Inspiron, LaserJet, etc.">
                </div>
                <div class="form-group">
                    <label for="serial-number">Número de Série:</label>
                    <input type="text" id="serial-number" placeholder="ABCD123456">
                </div>
            </div>
        </section>

        <section class="form-section">
            <h2>Serviço Realizado</h2>
            <div class="form-group">
                <label for="service-description">Descrição dos Procedimentos Executados:</label>
                <textarea id="service-description" rows="4" placeholder="Substituição de peças, limpeza, ajustes, etc."></textarea>
            </div>
            <div class="form-group">
                <label for="replaced-parts">Peças Substituídas:</label>
                <textarea id="replaced-parts" rows="2" placeholder="Fonte Dell 400W, Nº de Série XYZ987654, etc."></textarea>
            </div>
        </section>

        <section class="form-section">
            <h2>Situação de Recolhimento</h2>
            <div class="form-group-row">
                <div class="form-group">
                    <label for="pickup-date">Data do Recolhimento:</label>
                    <input type="date" id="pickup-date">
                </div>
                <div class="form-group">
                    <label for="return-date">Previsão de Retorno:</label>
                    <input type="date" id="return-date">
                </div>
            </div>
            <div class="form-group">
                <label for="physical-condition">Estado Físico no Recolhimento:</label>
                <textarea id="physical-condition" rows="2" placeholder="Descreva o estado físico: arranhões, amassados, etc."></textarea>
            </div>
        </section>

        <section class="form-section">
            <h2>Assinaturas</h2>
            <div class="form-group-row">
                <div class="form-group">
                    <label for="technician-signature">Assinatura do Técnico Responsável:</label>
                    <input type="text" id="technician-signature" placeholder="Nome do técnico">
                </div>
                <div class="form-group">
                    <label for="client-signature">Assinatura do Cliente:</label>
                    <input type="text" id="client-signature" placeholder="Nome do cliente">
                </div>
            </div>
        </section>

        <footer>
            <button type="submit">Enviar Relatório</button>
        </footer>
    </div>
</body>
</html>
