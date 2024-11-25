class LessonApplication {
    constructor(lessonRepository) {
      this.lessonRepository = lessonRepository;
    }
  
    async add(data) {
      return await this.lessonRepository.add(data);
    }
  
    async getById(id) {
      return await this.lessonRepository.getById(id);
    }
  
    async getAll() {
      return await this.lessonRepository.getAll();
    }
  
    async update(data) {
      return await this.lessonRepository.update(data);
    }
  
    async delete(id) {
      return await this.lessonRepository.delete(id);
    }

    async fetchActivity({ disciplineId, level }) {
      if (!disciplineId || !level) {
        throw new Error("Os parâmetros 'disciplineId' e 'level' são obrigatórios.");
      }
  
      const activity = await this.lessonRepository.findByDisciplineAndLevel(disciplineId, level);
  
      if (!activity) {
        throw new Error("Nenhuma atividade encontrada para os critérios fornecidos.");
      }
  
      return activity;
    }
  
  }
  
  module.exports = LessonApplication;
  