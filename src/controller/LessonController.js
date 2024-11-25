const { lessonFacade } = require("../dependency/injection");

module.exports.add = async (req, res) => {
    let row = await lessonFacade.add(req.body);
    res.status(200).json(row);
};

module.exports.getAll = async (req, res) => {
    let row = await lessonFacade.getAll();
    res.status(200).json(row);
};

module.exports.getById = async (req, res) => {
    const { id } = req.params;
    let row = await lessonFacade.getById(id);
    res.status(200).json(row);
};

module.exports.update = async (req, res) => {
    let row = await lessonFacade.update(req);
    res.status(200).json(row);
};

module.exports.delete = async (req, res) => {
    const { id } = req.params;
    let row = await lessonFacade.delete(id);
    res.status(200).json(row);
};

module.exports.fetchActivity = async (req, res) => {
    try {
      const { disciplineId, level } = req.query; 
  
      const activity = await lessonFacade.fetchActivity({ disciplineId, level });
  
      res.status(200).json(activity);
    } catch (err) {
      res.status(404).json({ error: err.message });
    }
};