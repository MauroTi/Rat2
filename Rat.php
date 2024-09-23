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
            <h1>Relatório de Atendimento Técnico (RAT)</h1>
        </header>

        <!-- Ordem de Serviço -->
        <section class="form-section">
            <h2>Dados da Ordem de Serviço</h2>
            <div class="form-group-row">
                <div class="form-group">
                    <label for="os-number">Número da OS:</label>
                    <input type="text" id="os-number" placeholder="000123">
                </div>
                <div class="form-group">
                    <label for="os-date">Data:</label>
                    <input type="date" id="os-date">
                </div>
                <div class="form-group">
                    <label for="os-time">Hora:</label>
                    <input type="time" id="os-time">
                </div>
                <div class="form-group">
                    <label for="contract">Contrato:</label>
                    <input type="text" id="contract" placeholder="12345-XYZ">
                </div>
            </div>
            <div class="form-group-row">
                <div class="form-group">
                    <label for="warranty">Garantia:</label>
                    <input type="text" id="warranty" placeholder="Sim/Não">
                </div>
                <div class="form-group">
                    <label for="eventual-payment">Eventual a Pagar:</label>
                    <input type="text" id="eventual-payment" placeholder="R$ 0,00">
                </div>
                <div class="form-group">
                    <label for="demonstration">Demonstração:</label>
                    <input type="text" id="demonstration" placeholder="Sim/Não">
                </div>
                <div class="form-group">
                    <label for="equipment">Equipamento:</label>
                    <input type="text" id="equipment" placeholder="Computador, Impressora">
                </div>
            </div>
        </section>

        <!-- Dados do Cliente -->
        <section class="form-section">
            <h2>Dados do Cliente</h2>
            <div class="form-group-row">
                <div class="form-group">
                    <label for="client-name">Razão Social:</label>
                    <input type="text" id="client-name" placeholder="Empresa XYZ">
                </div>
                <div class="form-group">
                    <label for="client-cnpj">CNPJ:</label>
                    <input type="text" id="client-cnpj" placeholder="00.000.000/0001-00">
                </div>
                <div class="form-group">
                    <label for="client-address">Endereço:</label>
                    <input type="text" id="client-address" placeholder="Rua Exemplo, 100, Centro">
                </div>
                <div class="form-group">
                    <label for="client-city">Cidade:</label>
                    <input type="text" id="client-city" placeholder="São Paulo">
                </div>
            </div>
        </section>

        <!-- Dados do Usuário -->
        <section class="form-section">
            <h2>Dados do Usuário</h2>
            <div class="form-group-row">
                <div class="form-group">
                    <label for="user-name">Nome:</label>
                    <input type="text" id="user-name" placeholder="Nome do Usuário">
                </div>
                <div class="form-group">
                    <label for="user-email">Email:</label>
                    <input type="email" id="user-email" placeholder="usuario@empresa.com">
                </div>
                <div class="form-group">
                    <label for="user-phone">Telefone:</label>
                    <input type="tel" id="user-phone" placeholder="(11) 0000-0000">
                </div>
                <div class="form-group">
                    <label for="user-room">Sala/Andar:</label>
                    <input type="text" id="user-room" placeholder="Sala 101, 1º Andar">
                </div>
            </div>
        </section>

        <!-- Atendimento -->
        <section class="form-section">
            <h2>Atendimento</h2>
            <div class="form-group-row atendimento-group">
                <div class="form-group">
                    <label for="attendance-date">Data do Atendimento:</label>
                    <input type="date" id="attendance-date">
                </div>
                <div class="form-group">
                    <label for="start-time">Início:</label>
                    <input type="time" id="start-time">
                </div>
                <div class="form-group">
                    <label for="end-time">Término:</label>
                    <input type="time" id="end-time">
                </div>
                <div class="form-group">
                    <label for="correct-serial">Série Correta:</label>
                    <input type="text" id="correct-serial" placeholder="XYZ123456">
                </div>
            </div>
        </section>

        <!-- Soluções e Defeitos -->
        <section class="form-section">
            <h2>Relato e Solução</h2>
            <div class="form-group">
                <label for="reported-defect">Defeito Relatado:</label>
                <textarea id="reported-defect" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="found-defect">Defeito Constatado:</label>
                <textarea id="found-defect" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="solution">Solução:</label>
                <textarea id="solution" rows="3"></textarea>
            </div>
        </section>

        <!-- Intervenções e Pendências -->
        <section class="form-section">
            <h2>Intervenções e Pendências</h2>
            <div class="form-group">
                <label>Equipamento:</label>
                <div class="form-group-row">
                    <div class="form-group">
                        <input type="checkbox" id="equip-stopped">
                        <label for="equip-stopped">Parado</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="equip-pending">
                        <label for="equip-pending">Funcionando c/ Pendência</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="equip-ok">
                        <label for="equip-ok">OK</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="pending-info">Informar Pendência:</label>
                <textarea id="pending-info" rows="2"></textarea>
            </div>
        </section>

        <!-- Assinaturas -->
        <section class="form-section">
            <h2>Assinaturas</h2>
            <div class="form-group-row">
                <div class="form-group">
                    <label for="client-signature">Assinatura do Cliente:</label>
                    <input type="text" id="client-signature" placeholder="Assinatura ou Carimbo">
                </div>
                <div class="form-group">
                    <label for="technician-signature">Assinatura do Técnico:</label>
                    <input type="text" id="technician-signature" placeholder="Assinatura do Técnico">
                </div>
            </div>
        </section>

        <footer>
            <button type="submit">Enviar Relatório</button>
        </footer>
    </div>
</body>
</html>
