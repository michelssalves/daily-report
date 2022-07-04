<?php
require_once('../conexao.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <section>
        <div class="container-md">
            <div class="container-lg">
                <div class="container-xl">
                    <div class="container-xxl">
                        <form action="saidaDaGaragemHtml.php" method="POST">
                        <div class="field">
                                <div class="control">
                                <label>Prefixo</label>
                                <select class="form-select" name="prefixo" id="prefixo" required>
                                    <option value="">Escolha o Prefixo</option>
                                    <?php
                                    $sql = $pdo->prepare("SELECT * FROM veiculos 
                                        WHERE STATUS = 1 AND setor= 'Coleta Domiciliar' AND combustivel= 'DIESEL S10';
                                        ORDER BY prefixo");
                                    $sql->execute();
                                    $fetchAll = $sql->fetchAll();
                                    foreach ($fetchAll as $prefixo) {
                                        echo '<option value="' . $prefixo['id_veiculo'] . '">' . $prefixo['prefixo'] . '</option>';
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                <label>Setor</label>
                                <select class="form-select" name="setor" id="setor" required>
                                    <option value="">Escolha o Setor</option>
                                    <?php
                                    $sql = $pdo->prepare("SELECT * FROM setores ORDER BY setor");
                                    $sql->execute();
                                    $fetchAll = $sql->fetchAll();
                                    foreach ($fetchAll as $setor) {
                                        echo '<option value="' . $setor['id_setor'] . '">' . $setor['setor'] . '</option>';
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
     
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="saida" value="OK">
                                    Saida
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="chegada" value="OK">
                                    Chegada
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check1" value="OK">
                                    Extintor de incendio e triangulo estao com condiçoes de uso
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check2" value="OK">
                                    Parabrisa esta sem trincas/riscos ou apenas com trincas/riscos que nao comprometem a dirigibilidade
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check3" value="OK">
                                    Farois, piscas, luzes e sirene de re, luzes de freio, giroflex e luzes intermitentes estao funcionando corretamente
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check4" value="OK">
                                    Pneus e prisioneiros estao em condiçoes de trabalho
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check5" value="OK">
                                    Retrovisores estao sem trincas/riscos ou apenas com trincas/riscos que nao comprometem a dirigibilidade
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check6" value="OK">
                                    Limpador de parabrisas esta funcionando corretamente
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check7" value="OK">
                                    Buzina esta funcionando
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check8" value="OK">
                                    Cintos de segurança(motorista e passageiros) estão adequados
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check9" value="OK">
                                    Painel de instrumentos e tacografo estao funcionando corretamente
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check10" value="OK">
                                    Freios estao funcionando corretamente sem vazamento de ar ou fluido e regulados adequadamente
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check11" value="OK">
                                    Molas mestres/tirantes estão em condiçoes de trabalho
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check12" value="OK">
                                    Itens de segurança dos coletores(pega-mão laterais e central, estribo e borrachas)estao em boas condições
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check13" value="OK">
                                    Caixa de chorume e grampos estão em boas condiçoes de trabalho
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check14" value="OK">
                                    Niveis de combustivel ARLA 32 agua e oleo do motor estao normais
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check15" value="OK">
                                    Molas comuns estao em condiçoes de trabalho
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check16" value="OK">
                                    Acesso para a cabine(estribo, material antiderrapante e pega-mão) esta adequado
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check17" value="OK">
                                    Pressao do truck e quando houver 4EIXO estao normais
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check18" value="OK">
                                    Documento (motorista e veiculo) estão validas
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check19" value="OK">
                                    Prensa do veiculos esta funcionando corretamente e sem vazamentos
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check20" value="OK">
                                    Ferramentas de operaçao(pa e vassoura) estao no veiculo
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check21" value="OK">
                                    Veiculos esta sem avarias
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check22" value="OK">
                                    Luz e tarjeta da placa e faixas refeletivas estao adequadas
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check23" value="OK">
                                    Cabine esta limpa organizada e conforme demais orientaçoes
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="checkbox" name="check24" value="OK">
                                    Baterias esta devidamente fixada e com tampa de proteçao
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <textarea id="observacoes" name="observacoes" rows="5" cols="50"></textarea>
                                </div>
                            </div>

                            <button type="submit">Cdastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>