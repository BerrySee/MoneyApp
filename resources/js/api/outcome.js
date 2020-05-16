export const Outcome = {
    lastOutcome: () => window.axios.get('/api/last/outcome'),
    addOutcome: (param) => window.axios.post('/api/outcome', param)
}
