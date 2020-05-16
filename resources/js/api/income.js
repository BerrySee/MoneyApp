export const Income = {
    lastIncome: () => window.axios.get('/api/last/income'),
    addIncome: (param) => window.axios.post('/api/income', param)
}
