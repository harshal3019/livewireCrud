<div>
  <label>Enter Name:</label>
  <input type="text" wire:model.debounce.1000ms="name"/>
  <br><br>
  <label>Text Message</label><br>
  <textarea wire:model="message"></textarea>
  <br><br>
  <label>Martial Status</label><br>
  <input type="radio" value="married" wire:model="martial_status" />Married
  <input type="radio" value="single" wire:model="martial_status" />Single<br>
  
  <label>Favourite Color</label><br>
  Red: <input type="checkbox" value="Red" wire:model="colors"/>
  Blue: <input type="checkbox" value="Blue" wire:model="colors"/>
  Green: <input type="checkbox" value="Green" wire:model="colors"/><br>
  <br>
  <label>FAvourite Fruits:</label>
  <br>
  <select wire:model="fruits">
      <option value="">Select Fruits</option>
      <option value="apple">Apple</option>
      <option value="mango">Mango</option>
      <option value="banana">Banana</option>
  </select>
  <hr>
  Name :  {{$name}}<br><br>
  Text Message : {{$message}} <br><br>
  Martial Status : {{$martial_status}} <br><br>
  <ul>
    @foreach($colors as $color)
    <li>{{$color}}</li>
    @endforeach
  </ul>
<br><br>
Favourite Fruits : 
{{$fruits}}
</div>
