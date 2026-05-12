<template>
    <div class="bg-gradient-hero">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top py-3" style="background: rgba(15, 23, 42, 0.8); backdrop-filter: blur(10px);">
            <div class="container">
                <a class="navbar-brand fw-bold fs-4" href="#">João Rampazzo.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link px-3" href="#home">Início</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#about">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#skills">Habilidades</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#experience">Experiência</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#portfolio">Projetos</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="home" class="py-5 mt-5">
            <div class="container">
                <div class="row align-items-center min-vh-75">
                    <div class="col-lg-7">
                        <h5 class="text-primary fw-bold mb-3">Olá, meu nome é</h5>
                        <h1 class="display-1 fw-extrabold mb-4" style="letter-spacing: -2px;">João Pedro <br><span class="text-gradient">Rampazzo</span></h1>
                        <p class="lead text-secondary mb-5 fs-4" style="max-width: 600px;">
                            Desenvolvedor de Sistemas Fullstack focado em criar soluções eficientes, escaláveis e com alta qualidade técnica.
                        </p>
                        <div class="d-flex gap-3">
                            <a href="#portfolio" class="btn btn-primary btn-lg px-4 py-3 rounded-4 fw-bold">Ver Projetos</a>
                            <a href="#about" class="btn btn-outline-light btn-lg px-4 py-3 rounded-4 fw-bold">Sobre Mim</a>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="glass-card p-5 text-center shadow-lg">
                            <div class="display-1 text-primary mb-3"><i class="bi bi-code-slash"></i></div>
                            <h3>Fullstack Dev</h3>
                            <p class="text-secondary">Laravel • JavaScript • MySQL</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-5">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mb-5">
                        <h2 class="display-4 mb-4">Minha História</h2>
                        <p class="lead text-secondary">
                            Com sólida experiência no ecossistema PHP e frameworks modernos, busco transformar desafios complexos em sistemas simplificados. Minha trajetória inclui desde projetos para o setor e-commerce (FutFanatics) até vivência internacional.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-5 bg-dark-darker">
            <div class="container py-5">
                <h2 class="mb-5 text-center">Tecnologias</h2>
                <div class="row g-4">
                    <div v-for="(group, category) in skills" :key="category" class="col-md-6 col-lg-3">
                        <div class="glass-card p-4 h-100">
                            <h5 class="text-primary mb-4">{{ category }}</h5>
                            <div class="d-flex flex-wrap gap-2">
                                <span v-for="skill in group" :key="skill.id" class="badge-skill">
                                    {{ skill.name }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experience Section -->
        <section id="experience" class="py-5">
            <div class="container py-5">
                <h2 class="mb-5 text-center">Experiência Profissional</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div v-for="exp in experiences" :key="exp.id" class="timeline-item">
                            <h4 class="fw-bold mb-1">{{ exp.role }}</h4>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="text-primary mb-0">{{ exp.company }}</h6>
                                <span class="small text-secondary">{{ exp.period }}</span>
                            </div>
                            <p class="text-secondary">{{ exp.description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Section -->
        <section id="portfolio" class="py-5">
            <div class="container py-5">
                <h2 class="mb-5 text-center">Projetos em Destaque</h2>
                <div class="bento-grid">
                    <div v-for="project in projects" :key="project.id" class="glass-card project-card p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h4 class="fw-bold mb-0">{{ project.title }}</h4>
                            <span v-if="project.is_private" class="badge bg-warning text-dark rounded-pill" style="font-size: 0.7rem;">
                                <i class="bi bi-lock-fill"></i> Privado
                            </span>
                        </div>
                        
                        <p class="text-secondary flex-grow-1">{{ project.description }}</p>
                        
                        <div class="mt-3">
                            <small class="text-primary d-block mb-3">{{ project.tech_stack }}</small>
                            
                            <div class="d-flex gap-2">
                                <button v-if="project.is_private" 
                                        @click="openCaseStudy(project)"
                                        class="btn btn-outline-primary btn-sm rounded-3">
                                    Case Study <i class="bi bi-file-text"></i>
                                </button>
                                
                                <a v-else :href="project.link" 
                                   target="_blank"
                                   class="btn btn-outline-primary btn-sm rounded-3">
                                    Acessar <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study Modal -->
                <div class="modal fade" id="caseStudyModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content bg-dark border-secondary rounded-4 shadow-lg">
                            <div class="modal-header border-secondary p-4">
                                <h3 class="modal-title fw-bold" id="exampleModalLabel">{{ selectedProject?.title }}</h3>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                                <h5 class="text-primary mb-3">Desafios e Soluções</h5>
                                <p class="text-light fs-5 lead" style="white-space: pre-line;">{{ selectedProject?.long_description }}</p>
                                <div class="mt-4 p-3 glass-card bg-opacity-10 border-primary border-opacity-25">
                                    <h6 class="text-secondary small text-uppercase fw-bold mb-2">Stack Tecnológica</h6>
                                    <span class="text-primary">{{ selectedProject?.tech_stack }}</span>
                                </div>
                            </div>
                            <div class="modal-footer border-secondary">
                                <button type="button" class="btn btn-secondary rounded-3" data-bs-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="py-5 border-top border-secondary opacity-50 mt-5">
            <div class="container text-center text-secondary">
                <p>© 2026 João Pedro Rampazzo. Desenvolvido com Laravel + Vue + Bootstrap.</p>
                <div class="d-flex justify-content-center align-items-center gap-4 mt-3">
                    <!-- GitHub Links Group -->
                    <div class="d-flex gap-3 align-items-center">
                        <a href="https://github.com/JoaoRampazzo-Fut" target="_blank" class="text-secondary social-link d-flex align-items-center gap-2" title="GitHub Profissional">
                            <i class="bi bi-github fs-4"></i>
                            <span class="small fw-bold opacity-75 d-none d-sm-inline">Profissional</span>
                        </a>
                        <span class="text-muted opacity-25">|</span>
                        <a href="https://github.com/JoaoRampazzo" target="_blank" class="text-secondary social-link d-flex align-items-center gap-2" title="GitHub Pessoal">
                            <i class="bi bi-github fs-4"></i>
                            <span class="small fw-bold opacity-75 d-none d-sm-inline">Pessoal</span>
                        </a>
                    </div>
                    
                    <span class="text-muted opacity-25">|</span>

                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/jprampazzo197/" target="_blank" class="text-secondary social-link" title="LinkedIn">
                        <i class="bi bi-linkedin fs-4"></i>
                    </a>
                </div>
            </div>
        </footer>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { Modal } from 'bootstrap';

const props = defineProps({
    projects: Array,
    experiences: Array,
    skills: Object
});

const selectedProject = ref(null);
let modalInstance = null;

onMounted(() => {
    const modalElement = document.getElementById('caseStudyModal');
    if (modalElement) {
        modalInstance = new Modal(modalElement);
    }
});

const openCaseStudy = (project) => {
    selectedProject.value = project;
    if (modalInstance) {
        modalInstance.show();
    }
};
</script>

<style scoped>
.text-gradient {
    background: linear-gradient(to right, #6366f1, #a855f7);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.min-vh-75 {
    min-height: 75vh;
}

.bg-dark-darker {
    background-color: #0b1120;
}

.fw-extrabold {
    font-weight: 800;
}

.social-link {
    text-decoration: none;
    transition: all 0.3s ease;
}

.social-link:hover {
    color: var(--primary-color) !important;
    opacity: 1 !important;
}

.social-link i {
    transition: transform 0.3s ease;
}

.social-link:hover i {
    transform: translateY(-3px);
}
</style>
