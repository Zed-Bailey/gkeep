{{-- https://devdojo.com/tnylea/create-a-typing-effect-in-alpinejs --}}
<div class="" x-data="{
                text: '',
                textArray : ['Todo Lists' , 'Study Notes', 'Ideas'],
                textIndex: 0,
                charIndex: 0,
                pauseEnd: 1000,
                pauseStart: 20,
                typeSpeed: 75,
                direction: 'forward'
                }" x-init="(() => { 
                
                let typingInterval = setInterval(startTyping, $data.typeSpeed);
                
                function startTyping(){
                let current = $data.textArray[ $data.textIndex ];
                if($data.charIndex > current.length){
                        $data.direction = 'backward';
                        clearInterval(typingInterval);
                        setTimeout(function(){
                        typingInterval = setInterval(startTyping, $data.typeSpeed);
                        }, $data.pauseEnd);
                }   
                    
                $data.text = current.substring(0, $data.charIndex);
                if($data.direction == 'forward'){
                    $data.charIndex += 1;
                    } else {
                    if($data.charIndex == 0){
                        $data.direction = 'forward';
                        clearInterval(typingInterval);
                        setTimeout(function(){
                        
                            $data.textIndex += 1;
                            if($data.textIndex >= $data.textArray.length){
                                $data.textIndex = 0;
                            }
                        
                            typingInterval = setInterval(startTyping, $data.typeSpeed);
                        }, $data.pauseStart);
                    }
                    $data.charIndex -= 1;
                    }
                }
            })()">
    <h1 class="text-7xl font-black" x-text="text"></h1>
</div>
