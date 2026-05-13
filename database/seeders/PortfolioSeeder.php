<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Skills
        \App\Models\Skill::create(['name' => 'PHP', 'category' => 'Backend', 'level' => 90, 'icon' => 'php']);
        \App\Models\Skill::create(['name' => 'Laravel', 'category' => 'Backend', 'level' => 85, 'icon' => 'laravel']);
        \App\Models\Skill::create(['name' => 'JavaScript', 'category' => 'Frontend', 'level' => 80, 'icon' => 'js']);
        \App\Models\Skill::create(['name' => 'MySQL', 'category' => 'Database', 'level' => 80, 'icon' => 'database']);
        \App\Models\Skill::create(['name' => 'PostgreSQL', 'category' => 'Database', 'level' => 80, 'icon' => 'database']);
        \App\Models\Skill::create(['name' => 'Git', 'category' => 'Tools', 'level' => 85, 'icon' => 'git']);
        \App\Models\Skill::create(['name' => 'IA', 'category' => 'Tools', 'level' => 85, 'icon' => 'cpu']);

        // Experiences
        \App\Models\Experience::create([
            'company' => 'FutFanatics',
            'role' => 'Desenvolvedor de Sistemas',
            'period' => 'Fev 2025 - Presente',
            'description' => 'Desenvolvimento de soluções internas, QA, e suporte as demandas de TI, envolvendo sistemas legados, novos e integrações.',
            'order' => 1
        ]);

        \App\Models\Experience::create([
            'company' => 'Little Switzerland (EUA)',
            'role' => 'Intercâmbio Work and Travel',
            'period' => 'Dez 2023 - Mar 2024',
            'description' => 'Experiência internacional de 3 meses, com foco em atendimento ao cliente e resolução de problemas e aprimoramento do ingles.',
            'order' => 2
        ]);
        
        \App\Models\Experience::create([
            'company' => 'C5V',
            'role' => 'Estágiario em TI',
            'period' => 'Abr 2023 - Jun 2023',
            'description' => 'Desenvolvimento de projetos de robótica utilizando Arduino.',
            'order' => 3
        ]);
        

        // Projects
        \App\Models\Project::create([
            'title' => 'Controle de Ativos',
            'description' => 'Sistema para gestão de ativos da empresa.',
            'long_description' => 'Desenvolvimento de uma plataforma robusta para inventário de ativos. O sistema gerencia desde a entrada de novos ativos até a baixa definitiva, com controle de movimentação. Utilizamos Laravel para o backend e Javasscript para uma interface reativa.',
            'tech_stack' => 'Laravel, Javascript, PostgreSQL',
            'link' => '#',
            'is_private' => true
        ]);
        \App\Models\Project::create([
            'title' => 'Resgate de Valores',
            'description' => 'Ferramenta para automatização de processos financeiros.',
            'long_description' => 'Solução criada para automatizar a conciliação de resgates financeiros entre ativos danificados e fornecedores. O foco foi em precisão de dados e auditoria para controlar ativos que foram auditados como auditados ou recebidos de volta dos clientes e entrar em contato com os fornecedores para recuperar o valor do ativo.',
            'tech_stack' => 'PHP, JavaScript, MySQL',
            'link' => '#',
            'is_private' => true
        ]);
        \App\Models\Project::create([
            'title' => 'Sistema de Devoluções',
            'description' => 'Gerenciamento completo de devoluções e trocas.',
            'long_description' => 'Sistema de RMA (Return Merchandise Authorization) que simplifica o processo de devolução para o cliente final e para o setor de logística. Inclui integração com APIs de frete para geração de etiquetas de postagem e controle de fluxo de inspeção técnica.',
            'tech_stack' => 'PHP, React, MySQL',
            'link' => '#',
            'is_private' => true
        ]);
    }
}
