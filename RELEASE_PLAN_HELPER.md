# Release plan helper file

## Release 1 : v0.2.0

### User Story 1: En tant qu'utilisateur, je veux pouvoir créer une nouvelle tâche avec un titre et une description.

```
public function store(Request $request)
{
    $task = Task::create($request->all());

    return response()->json($task, 201);
}
```

### User Story 2: En tant qu'utilisateur, je veux pouvoir afficher la liste de toutes les tâches existantes.

```
public function index()
{
    $tasks = Task::all();

    return response()->json($tasks);
}
```

## Release 1 : v0.4.0

### User Story 3: En tant qu'utilisateur, je veux pouvoir mettre à jour une tâche existante en modifiant son titre ou sa description.

```
public function update(Request $request, string $id)
{
    $task = Task::findOrFail($id);
    $task->update($request->all());

    return response()->json($task);
}
```

### User Story 4: En tant qu'utilisateur, je veux pouvoir supprimer une tâche existante.

```
public function destroy(string $id)
{
    $task = Task::findOrFail($id);
    $task->delete();

    return response()->json(null, 204);
}
```

## Release 3 : v0.5.0

### User Story 5: En tant qu'utilisateur, je veux pouvoir marquer une tâche comme terminée

```
public function complete(string $id)
{
    $task = Task::findOrFail($id);
    $task->finished = true;
    $task->save();

    return response()->json($task);
}
```
