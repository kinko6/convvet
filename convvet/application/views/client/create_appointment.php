<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Agendamento</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        /* Estilo do container do formulário */
        .body2 {
            display: grid;
            align-items: center;
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
        }

        .appointment-form-container {
            width: 50%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .appointment-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        label {
            font-size: 1rem;
            color: #333;
        }

        select, textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
            outline: none;
            transition: border 0.3s ease;
        }

        select:focus, textarea:focus {
            border-color: #9e53f7;
        }

        textarea {
            min-height: 150px;
            resize: vertical;
        }

        button {
            padding: 12px 25px;
            background-color: #9e53f7;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #944fe8;
        }
    </style>
</head>
<body>
    <div class="body2">
        <div class="appointment-form-container">
            <h2 class="form-title">Criar Agendamento</h2>
            <form method="post" action="<?php echo base_url('client_dashboard/submit_appointment'); ?>">
                <div>
                    <label for="pet_id">Pet</label>
                    <select name="pet_id" id="pet_id" required>
                        <?php foreach ($pets as $pet): ?>
                            <option value="<?php echo $pet->id; ?>"><?php echo $pet->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div>
                    <label for="description">Descrição</label>
                    <textarea name="description" id="description" required></textarea>
                </div>

                <button type="submit">Agendar</button>
            </form>
        </div>
    </div>
    <script src="../js/navbar.js"></script>
</body>
</html>
