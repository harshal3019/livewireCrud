<div>
  <button type="button" wire:click="addTwoNumber(30,70)">Sum</button><br><br>

  <textarea wire:keydown.enter="displayMessage($event.target.value)"></textarea><br>
    <br>

    <form wire:submit.prevent="getSum">
        <label>Enter Num 1:</label>
        <input type="text" name="num1" wire:model="num1"/>
        <br><br>
        <label>Enter Num 2:</label>
        <input type="text" name="num2" wire:model="num2"/>
        <br>
        <button type="submit">Get Sum</button>
    </form><br><br>

  SUM: {{$sum}}<br>
  Message: {{$message}}
</div>
