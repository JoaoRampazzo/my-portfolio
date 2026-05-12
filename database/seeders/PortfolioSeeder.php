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
        \App\Models\Skill::create(['name' => 'Vue.js', 'category' => 'Frontend', 'level' => 75, 'icon' => 'vuejs']);
        \App\Models\Skill::create(['name' => 'MySQL', 'category' => 'Database', 'level' => 80, 'icon' => 'database']);
        \App\Models\Skill::create(['name' => 'Git', 'category' => 'Tools', 'level' => 85, 'icon' => 'git']);

        // Experiences
        \App\Models\Experience::create([
            'company' => 'FutFanatics',
            'role' => 'Analista e Desenvolvedor de Sistemas',
            'period' => 'Fev 2025 - Presente',
            'description' => 'Desenvolvimento e manutenção de sistemas e-commerce, integrações e ferramentas internas.',
            'order' => 1
        ]);

        \App\Models\Experience::create([
            'company' => 'Little Switzerland (EUA)',
            'role' => 'Customer Service',
            'period' => 'Dez 2023 - Mar 2024',
            'description' => 'Atendimento ao cliente e resolução de problemas.',
            'order' => 2
        ]);
        
        \App\Models\Experience::create([
            'company' => 'Empresa Júnior',
            'role' => 'Estágiario em TI',
            'period' => 'Abr 2023 - Jun 2023',
            'description' => 'Desenvolvimento de projetos de robótica utilizando Arduino.',
            'order' => 3
        ]);
        

        // Projects
        \App\Models\Project::create([
            'title' => 'Controle de Ativos',
            'description' => 'Sistema para gestão de hardware e software da empresa.',
            'long_description' => 'Desenvolvimento de uma plataforma robusta para inventário de ativos de TI. O sistema gerencia desde a entrada de novos equipamentos até a baixa definitiva, com controle de termos de responsabilidade e histórico de manutenções. Utilizei Laravel para o backend e Vue.js para uma interface reativa.',
            'tech_stack' => 'Laravel, Javascript, PostgreSQL',
            'link' => '#',
            'is_private' => true
        ]);
        \App\Models\Project::create([
            'title' => 'Resgate de Valores',
            'description' => 'Ferramenta para automatização de processos financeiros.',
            'long_description' => 'Solução criada para automatizar a conciliação de resgates financeiros entre diferentes gateways de pagamento e o sistema interno da empresa. O foco foi em precisão de dados e auditoria, utilizando processos em fila para processamento de grandes volumes de dados.',
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
