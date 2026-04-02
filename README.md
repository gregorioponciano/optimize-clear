<p align="center">
  <img src="https://img.shields.io/badge/Laravel-Optimization-FF2D20?style=for-the-badge&logo=laravel" alt="Laravel Optimization">
  <img src="https://img.shields.io/badge/PHP-Artisan-777BB4?style=for-the-badge&logo=php" alt="PHP Artisan">
  <img src="https://img.shields.io/badge/Performance-High-green?style=for-the-badge" alt="Performance">
</p>

<h1 align="center">⚡ Laravel Optimize & Clear Guide</h1>

<p align="center">
  <strong>Guia completo de comandos e scripts para otimização de performance, limpeza de cache e manutenção de aplicações Laravel.</strong>
</p>

---

## 📝 Sobre o Projeto

Este repositório reúne as melhores práticas e comandos essenciais para garantir que sua aplicação Laravel esteja sempre operando na velocidade máxima. É um utilitário indispensável para resolver problemas comuns de "código que não atualiza" ou "lentidão no carregamento" em ambientes de produção e desenvolvimento.

### 🚀 Por que otimizar?
O Laravel armazena muitas informações em cache (rotas, configurações, views, tradução) para evitar processamento desnecessário. Saber quando e como limpar ou gerar esse cache é a chave para uma aplicação estável.

---

## 🛠️ Comandos de Limpeza (Clear)

Utilize estes comandos quando fizer alterações no código que não refletem no navegador:

| Comando | Descrição |
| :--- | :--- |
| `php artisan cache:clear` | Limpa o cache da aplicação (banco de dados/redis). |
| `php artisan config:clear` | Remove o arquivo de cache das configurações (`.env` e `config/`). |
| `php artisan route:clear` | Remove o cache das rotas. |
| `php artisan view:clear` | Limpa todos os arquivos de visualização compilados (Blade). |
| `php artisan optimize:clear` | **O "Curinga":** Executa todos os comandos acima de uma vez. |

---

## 🏎️ Comandos de Performance (Optimize)

Utilize estes comandos **apenas em produção** para acelerar o carregamento do site:

```bash
# Otimiza o carregamento de classes e arquivos de configuração
php artisan optimize

# Cache de rotas (melhora muito o tempo de resposta do servidor)
php artisan route:cache

# Cache de configurações (evita ler o arquivo .env a cada requisição)
php artisan config:cache

# Pré-compila todas as views Blade
php artisan view:cache
